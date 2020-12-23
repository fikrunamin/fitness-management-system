<?php

namespace App\Controllers;

class Workout extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Start'
        ];
        return view('workouts/start', $data);
    }

    public function progress(){
        
        $data = [
            'title' => 'Exercising'
        ];
        return view('workouts/progress', $data);
    }

    //--------------------------------------------------------------------

}
