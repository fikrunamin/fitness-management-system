<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WorkoutStepsTable extends Migration
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
			'id_workout' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'name' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'description' => [
				'type'           => 'TEXT',
			],
			'image' => [
				'type'           => 'TEXT',
				'null'       => true,
			],
		]);

		$this->forge->addKey('id', true);

		$this->forge->addForeignKey('id_workout', 'workouts', 'id', 'CASCADE', 'CASCADE');

		$this->forge->createTable('workout_steps');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('workout_steps');
	}
}
