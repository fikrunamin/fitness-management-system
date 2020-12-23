<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WorkoutsTable extends Migration
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
			'description' => [
				'type'           => 'TEXT',
			],
			'image' => [
				'type'           => 'TEXT',
			],
			'workout_time' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'place' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'iteration' => [
				'type'           => 'VARCHAR',
				'constraint'     => 2,
			],
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('workouts');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('workouts');
	}
}
