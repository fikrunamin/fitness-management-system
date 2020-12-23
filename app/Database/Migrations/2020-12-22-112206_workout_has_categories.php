<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WorkoutHasCategories extends Migration
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
			'id_workout_category' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			]
		]);

		$this->forge->addKey('id', true);

		$this->forge->addForeignKey('id_workout_category', 'workout_categories', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_workout', 'workouts', 'id', 'CASCADE', 'CASCADE');

		$this->forge->createTable('workout_has_categories');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('workout_has_categories');
	}
}
