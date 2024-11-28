<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuideTouristiqueTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_guide' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'auto_increment' => true, 
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',  // Increased length
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',  // Increased length
            ],
            'telephone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'ville' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',  // Increased length
            ],
            'pays' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',  // Increased length
            ],
            'adresse' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',  // Increased length
            ],
            'specialite' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',  // Increased length
            ],
            'disponibilite' => [
                'type' => 'TEXT',  // Keep as TEXT for larger content
            ],
            'experience' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addPrimaryKey('id_guide');
        $this->forge->createTable('GuideTouristique');
    }

    public function down()
    {
        $this->forge->dropTable('GuideTouristique');
    }
}
