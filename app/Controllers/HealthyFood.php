<?php

namespace App\Controllers;

use App\Models\HealthyFoods;
use App\Models\WorkoutCategories;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\Workouts;

class HealthyFood extends BaseController
{
    public $healthyFoodModel;
    public $workoutCategoriesModel;
    public $db;

    public function __construct()
    {
        $this->healthyFoodModel = new HealthyFoods();
        $this->workoutCategoriesModel = new WorkoutCategories();
        $this->db = \Config\Database::connect();
    }

    public function index($slug = "")
    {
        if ($slug != "") {
            $data = $this->healthyFoodModel->getDetail($slug);

            $data = [
                'title' => $data[0]['name'],
                'data' => $data,
            ];
            return view('healthy_foods/detail', $data);
        }

        $datas = $this->healthyFoodModel->findAll();

        // dd($datas);

        $data = [
            'title' => 'List of Healthy Foods',
            'datas' => $datas,
        ];

        return view('healthy_foods/list_healthy_foods', $data);
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

    public function detail($slug)
    {
        $datas = $this->healthyFoodModel->getDetail($slug);

        $data = [
            'title' => "{$datas[0]['name']} in Progress",
            'datas' => $datas
        ];
        return view('healthy_foods/detail', $data);
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

            $dir = "assets/healthy-foods/" . $slug;
            $new_name = $slug . '.' . $img_file->getExtension();
            $img_file->move($dir, $new_name);
            $name = $dir . '/' . $new_name;

            $data = [
                "name" => $this->request->getVar('title'),
                "slug" => $slug,
                "image" => $name,
            ];

            $this->db->table('healthy_foods')->insert($data);
            $id_healthy_foods = $this->db->insertID();

            $this->db->table('healthy_food_detail')->insert([
                'id_healthy_food' => $id_healthy_foods,
                'category' => 'pros',
                'description' => $this->request->getVar('pros')
            ]);

            $this->db->table('healthy_food_detail')->insert([
                'id_healthy_food' => $id_healthy_foods,
                'category' => 'cons',
                'description' => $this->request->getVar('cons')
            ]);

            session()->setFlashdata('success', 'Your data has been succesfully saved!');

            return redirect()->to('/healthy-foods');
        }
        $data = [
            'title' => 'Add a Food'
        ];

        return view('healthy_foods/add', $data);
    }

    public function edit($id)
    {
        if ($this->request->getMethod() == "post") {
            $data = [
                "name" => $this->request->getVar('title'),
                "slug" => strtolower(url_title($this->request->getVar('title'))),
            ];

            $id_healthy_foods = $this->db->table('healthy_foods')->where('slug', $id)->get()->getResultArray()[0]['id'];

            $this->db->table('healthy_foods')->where('slug', $id)->update($data);


            $this->db->table('healthy_food_detail')->where('id_healthy_food', $id_healthy_foods)->delete();

            $this->db->table('healthy_food_detail')->insert([
                'id_healthy_food' => $id_healthy_foods,
                'category' => 'pros',
                'description' => $this->request->getVar('pros')
            ]);

            $this->db->table('healthy_food_detail')->insert([
                'id_healthy_food' => $id_healthy_foods,
                'category' => 'cons',
                'description' => $this->request->getVar('cons')
            ]);

            session()->setFlashdata('success', 'Your data has been succesfully saved!');

            return redirect()->to('/healthy-foods');
        }

        $datas = $this->healthyFoodModel->getDetail($id);

        $data = [
            'title' => 'Edit ' . $datas[0]['name'],
            'datas' => $datas
        ];

        return view('healthy_foods/edit', $data);
    }

    public function delete_food()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $food = $this->db->table('healthy_foods')->where('id', $id);
            $food->delete();

            $folder_name = $food->get()->getResultArray()[0]['slug'];

            $dir = '/assets/healthy-foods/' . $folder_name;
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
