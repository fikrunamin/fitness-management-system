<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InstructorsTable extends Migration
{

	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'fullname' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'gender' => [
				'type'           => 'VARCHAR',
				'constraint'     => 10,
			],
			'created_at' => [
				'type'           => 'DATETIME',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			]
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('instructors');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('instructors');
	}
}
