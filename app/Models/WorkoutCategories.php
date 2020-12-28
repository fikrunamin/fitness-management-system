<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkoutCategories extends Model
{
    protected $table      = 'workout_categories';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'created_at', 'updated_at'];

    public function getWorkout($keyword, $categories)
    {
        $data = $this->db->table('workout_has_categories')
            ->select('workouts.*, workout_categories.name as category')
            ->join('workouts', 'workouts.id = workout_has_categories.id_workout', 'left')
            ->join('workout_categories', 'workout_categories.id = workout_has_categories.id_workout_category', 'left')
            ->like('workouts.name', $keyword);

        $data->groupStart();

        foreach ($categories as $category) {
            if ($categories[0] == $category)
                $data->where('workout_categories.name', $category);
            else
                $data->orWhere('workout_categories.name', $category);
        }
        $data->groupEnd();
        $data->groupBy('workouts.id');

        return $data->get()->getResultArray();
    }
}
