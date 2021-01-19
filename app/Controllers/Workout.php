<?php

namespace App\Controllers;

use App\Models\WorkoutCategories;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\Workouts;

class Workout extends BaseController
{
    public $workoutModel;
    public $workoutCategoriesModel;
    public $db;

    public function __construct()
    {
        $this->workoutModel = new Workouts();
        $this->workoutCategoriesModel = new WorkoutCategories();
        $this->db = \Config\Database::connect();
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

    public function add()
    {
        if ($this->request->getMethod() == 'post') {
            $slug = strtolower(url_title($this->request->getVar('title')));

            $img_file = $this->request->getFile('image');

            $dir = "assets/workouts/" . $slug;
            $new_name = $slug . '.' . $img_file->getExtension();
            $img_file->move($dir, $new_name);
            $name = $dir . '/' . $new_name;

            $data = [
                "name" => $this->request->getVar('title'),
                "slug" => $slug,
                "description" => $this->request->getVar('description'),
                "workout_time" => "Morning",
                "image" => $name,
                "iteration" => $this->request->getVar('iteration'),
            ];

            $this->db->table('workouts')->insert($data);
            $id_workout = $this->db->insertID();

            $this->db->table('workout_has_categories')->insert([
                'id_workout' => $id_workout,
                'id_workout_category' => 1
            ]);

            $total_steps = $this->request->getVar('total_steps');

            for ($i = 1; $i <= $total_steps; $i++) {
                $img_file = $this->request->getFile("step_image_$i");

                $dir = "assets/workouts/" . $slug;
                $new_name = "step_$i" . '.' . $img_file->getExtension();
                $img_file->move($dir, $new_name);
                $image_name = $dir . '/' . $new_name;

                $data = [
                    "id_workout" => $id_workout,
                    "name" => $this->request->getVar("step_title_$i"),
                    "description" => $this->request->getVar("step_description_$i"),
                    "image" => $image_name,
                ];

                $this->db->table('workout_steps')->insert($data);
            }

            session()->setFlashdata('success', 'Your data has been succesfully saved!');

            return redirect()->to('/workouts');
        }
        $data = [
            'title' => 'Add a New Workout',
            'categories' => $this->db->table('workout_categories')->get()->getResultArray()
        ];

        return view('workouts/add', $data);
    }

    public function edit($id)
    {
        if ($this->request->getMethod() == "post") {
            $id_workout = $this->request->getVar('id_workout');

            $data = [
                "name" => $this->request->getVar('title'),
                "slug" => url_title($this->request->getVar('title')),
                "description" => $this->request->getVar('description'),
                "workout_time" => "Morning",
                "iteration" => $this->request->getVar('iteration'),
            ];
            $this->db->table('workouts')->where('id', $id_workout)->update($data);

            $total_steps = $this->request->getVar('total_steps');
            $this->db->table('workout_steps')->where('id', $id_workout)->delete();

            for ($i = 1; $i <= $total_steps; $i++) {
                $data = [
                    "id_workout" => $id_workout,
                    "name" => $this->request->getVar("step_title_$i"),
                    "description" => $this->request->getVar("step_description_$i"),
                ];

                $this->db->table('workout_steps')->insert($data);
            }

            session()->setFlashdata('success', 'Your data has been succesfully saved!');

            return redirect()->to('/workouts');
        }

        $workout = $this->db
            ->query("select workouts.*, workout_steps.name as step_name, workout_steps.description as step_description, workout_steps.image as step_image from workouts left join workout_steps on workout_steps.id_workout = workouts.id where workouts.id = $id")
            ->getResultArray();

        $data = [
            'title' => 'Edit ' . $workout[0]['name'],
            'workouts' => $workout
        ];

        return view('workouts/edit', $data);
    }

    public function delete_workout()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $workout = $this->db->table('workouts')->where('id', $id);
            $workout->delete();

            $folder_name = $workout->get()->getResultArray()[0]['slug'];

            $dir = 'assets/workouts/' . $folder_name;
            $this->rrmdir($dir);

            echo json_encode("success");
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    private function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir")
                        $this->rrmdir($dir . "/" . $object);
                    else unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
    //--------------------------------------------------------------------

}
