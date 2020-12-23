<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WorkoutHistoriesTable extends Migration
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
			'id_user' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'id_instructor' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'id_workout' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'notes' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'null'			 => true
			],
			'finished_at' => [
				'type'           => 'DATETIME',
				'null'			 => true
			],
			'created_at' => [
				'type'           => 'DATETIME',
			],
			'updated_at' => [
				'type'           => 'DATETIME',
			]
		]);

		$this->forge->addKey('id', true);

		$this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_instructor', 'instructors', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_workout', 'workouts', 'id', 'CASCADE', 'CASCADE');

		$this->forge->createTable('workout_histories');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('workout_histories');
	}
}
