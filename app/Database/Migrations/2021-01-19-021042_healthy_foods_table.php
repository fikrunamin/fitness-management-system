<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HealthyFoodsTable extends Migration
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
			'name' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'slug' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'image' => [
				'type'           => 'TEXT',
				'null'			 => true
			],
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('healthy_foods');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('healthy_foods');
	}
}
