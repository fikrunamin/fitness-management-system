<?php

namespace App\Models;

use CodeIgniter\Model;

class Workouts extends Model
{
    protected $table      = 'workouts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'slug', 'description', 'image', 'workout_time', 'place', 'iteration'];

    public function getSteps($slug)
    {
        $data = $this->db->table($this->table)
            ->select('workouts.*, workout_steps.name as step_name, workout_steps.description as step_description, workout_steps.image as step_image')
            ->join('workout_steps', 'workouts.id = workout_steps.id_workout', 'left')
            ->where('workouts.slug', $slug)
            ->get()
            ->getResultArray();

        return $data;
    }
}
