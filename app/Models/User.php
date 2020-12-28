<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['id', 'fullname', 'occupation', 'gender', 'birthdate', 'workout_time', 'created_at', 'updated_at'];
}
