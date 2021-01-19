<?php

namespace App\Controllers;

use App\Models\WorkoutCategories;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\Workouts;

class Instructors extends BaseController
{
    public function index($name){
        if($name != ""){
            
        }

        $data = [
            'title' => 'Instructors'
        ];
        return view('instructors', $data);
    }
    //--------------------------------------------------------------------
}
