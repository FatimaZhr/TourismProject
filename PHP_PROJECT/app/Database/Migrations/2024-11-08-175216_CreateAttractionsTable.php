<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAttractionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => false,
            ],
         
            'localisation' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'horaires' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tarifs' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
        
         
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('attractions');
    }

    public function down()
    {
        $this->forge->dropTable('attractions');
    }
}
