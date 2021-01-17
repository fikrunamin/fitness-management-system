<?php

namespace App\Controllers;

use App\Models\AuthorizedUser;
use App\Models\User;
use Config\Services;

class Auth extends BaseController
{
    protected $userModel;
    protected $authorizedUserModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->authorizedUserModel = new AuthorizedUser();
    }

    public function login()
    {

        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $session = session();
            $data = $this->authorizedUserModel->where('email', $email)->first();
            if ($data) {
                $pass = $data['password'];
                $verify_pass = password_verify($password, $pass);
                if ($verify_pass) {
                    $this->setUserMethod($data);
                    return redirect()->to('/');
                } else {
                    $session->setFlashdata('msg', 'Wrong mail or password!');
                    return redirect()->to('/auth/login');
                }
            } else {
                $session->setFlashdata('msg', 'Wrong mail or password!');
                return redirect()->to('/auth/login');
            }
        }

        $data = [
            'title' => 'Login'
        ];
        echo view('auth/login', $data);
    }
    public function register()
    {
        session();
        
        if ($this->request->getMethod() == 'post') {

            if (!$this->validate([
                'fullname' => 'required',
                'occupation' => 'required',
                'gender' => 'required',
                'birthdate' => 'required',
                'workout_time' => 'required',
                'email' => 'required|valid_email|is_unique[authorized_users.email]',
                'password' => 'required|greater_than_equal_to[6]',
                'confirm_password' => 'required|matches[password]',
            ])) {
                $validation = \Config\Services::validation();

                return redirect()->to('/auth/register')->withInput()->with('validation', $validation);
            }

            $data = [
                'fullname' => $this->request->getVar('fullname'),
                'occupation' => $this->request->getVar('occupation'),
                'gender' => $this->request->getVar('gender'),
                'birthdate' => $this->request->getVar('birthdate'),
                'workout_time' => $this->request->getVar('workout_time'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];

            $this->userModel->insert($data);

            $id_user = $this->userModel->getInsertID();

            $data = [
                'id_user' => $id_user,
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];

            $this->authorizedUserModel->insert($data);

            return redirect()->to(base_url() . '/auth/login');
        }

        $data = [
            'title' => 'Create Account',
            'validation' => Services::validation()
        ];
        echo view('auth/register', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function update_profile()
    {
        if ($this->request->isAJAX()) {
            if (service('request')->getPost('key') == 'profile_information') {
                $data = [
                    'fullname' => service('request')->getPost('fullname'),
                    'occupation' => service('request')->getPost('occupation'),
                    'gender' => service('request')->getPost('prefix') == "mr" ? "male" : "female",
                    'birthdate' => service('request')->getPost('birthdate'),
                    'updated_at' => \Carbon\Carbon::now(),
                ];

                $this->userModel->update(session('id_user'), $data);
            } elseif (service('request')->getPost('key') == "update_email_and_password") {
                $data = [
                    'email' => service('request')->getPost('email'),
                    'updated_at' => \Carbon\Carbon::now(),
                ];

                if (service('request')->getPost('password') != '')
                    $data['password'] = password_hash(service('request')->getPost('password'), PASSWORD_DEFAULT);

                $this->authorizedUserModel->update(session('id_user'), $data);
            }

            $data = $this->authorizedUserModel->where('email', service('request')->getPost('email') ?? session('email'))->first();
            $this->setUserMethod($data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    private function setUserMethod($data)
    {
        $session = session();
        $data_user = $this->userModel->where('id', $data['id_user'])->first();

        $ses_data = [
            'id_user' => $data['id_user'],
            'email' => $data['email'],
            'role' => $data['role'],
            'logged_in' => TRUE,
            'data_user' => $data_user,
            'page' => 'search'
        ];
        $session->set($ses_data);
    }

    //--------------------------------------------------------------------

}
