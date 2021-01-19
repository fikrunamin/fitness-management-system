<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HealthyFoodsDetailTable extends Migration
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
			'id_healthy_food' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'category' => [
				'type'           => 'VARCHAR',
				'constraint'	 => 255
			],
			'description' => [
				'type' 			=> 'TEXT'
			]
		]);

		$this->forge->addKey('id', true);

		$this->forge->addForeignKey('id_healthy_food', 'healthy_foods', 'id', 'CASCADE', 'CASCADE');

		$this->forge->createTable('healthy_food_detail');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('healthy_food_detail');
	}
}
