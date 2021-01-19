<?php

namespace App\Models;

use CodeIgniter\Model;

class HealthyFoods extends Model
{
    protected $table      = 'healthy_foods';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'image'];

    public function getDetail($slug)
    {
        $data = $this->db->table($this->table)
            ->join('healthy_food_detail', 'healthy_foods.id = healthy_food_detail.id_healthy_food', 'left')
            ->where('healthy_foods.slug', $slug)
            ->get()
            ->getResultArray();

        return $data;
    }
}
