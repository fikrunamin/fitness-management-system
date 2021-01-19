<?php

namespace App\Controllers;

class Home extends BaseController
{
	public $db;
	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		if (!session()->get('logged_in')) {
			return view('welcome', $data);
		}

		$data = [
			'title' => 'Home',
			'workouts' => $this->db->table('workouts')->orderBy('id', 'desc')->limit(3)->get()->getResultArray(),
			'foods' => $this->db->table('healthy_foods')->orderBy('id', 'desc')->limit(3)->get()->getResultArray()
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
