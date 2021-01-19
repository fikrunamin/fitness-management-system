<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        if (!session()->get('logged_in')) {
            return view('welcome', $data);
        }
        return view('home', $data);
    }

    //--------------------------------------------------------------------

}
