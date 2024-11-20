<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaiementTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_paiement' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'id_reservation' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'montant' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => false,
            ],
            'date_paiement' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'methode_paiement' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false,
            ],
            'statut_paiement' => [
                'type'       => 'ENUM',
                'constraint' => ['payé', 'en attente', 'annulé'],
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id_paiement', true);
        $this->forge->addForeignKey('id_reservation', 'reservations', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Paiement');
    }

    public function down()
    {
        $this->forge->dropTable('Paiement');
    }
}
