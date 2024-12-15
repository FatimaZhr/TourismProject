<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPasswordToTouriste extends Migration
{
    public function up()
    {
        $this->forge->addColumn('touriste', [
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'after' => 'email',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('touriste', 'password');
    }
}
