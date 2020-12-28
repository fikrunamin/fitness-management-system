<?php

namespace App\Controllers;

use App\Models\WorkoutCategories;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\Workouts;

class Workout extends BaseController
{
    public $workoutModel;
    public $workoutCategoriesModel;

    public function __construct()
    {
        $this->workoutModel = new Workouts();
        $this->workoutCategoriesModel = new WorkoutCategories();
    }

    public function index($slug = "")
    {
        if ($slug != "") {
            $workout_data = $this->workoutModel->getSteps($slug);


            $data = [
                'title' => $workout_data[0]['name'],
                'data' => $workout_data,
            ];
            return view('workouts/start', $data);
        }

        $workout_data = $this->workoutModel->findAll();
        $categories = $this->workoutCategoriesModel->findAll();

        $data = [
            'title' => 'List of Workouts',
            'datas' => $workout_data,
            'categories' => $categories
        ];

        return view('workouts/list_workouts', $data);
    }

    public function search()
    {
        if ($this->request->isAjax()) {
            $keyword = $this->request->getVar('keyword') ?? '';
            $category = $this->request->getVar('category') ?? ['general'];

            $data = $this->workoutCategoriesModel->getWorkout($keyword, $category);

            echo json_encode($data);
        } else
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    public function start($slug)
    {
        $workout_data = $this->workoutModel->getSteps($slug);

        $data = [
            'title' => "{$workout_data[0]['name']} in Progress",
            'datas' => $workout_data
        ];
        return view('workouts/progress', $data);
    }

    public function finish($slug)
    {
        $workout_data = $this->workoutModel->getSteps($slug);
        $recommendation = $this->workoutModel->whereNotIn('slug', [$slug])->get()->getResultArray();

        $data = [
            'title' => 'Exercise Done',
            'datas' => $workout_data,
            'recommendations' => $recommendation,
        ];
        return view('workouts/finish', $data);
    }

    //--------------------------------------------------------------------

}
