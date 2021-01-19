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
        
        if ($this->request->getMethod() == 'post') {        // check method of login form, whether it is a post or not
            $email = $this->request->getVar('email');       // get the email from email field in the form
            $password = $this->request->getVar('password'); // get the password from password field in the form

            $session = session();                           // initialize session for login
            $data = $this->authorizedUserModel->where('email', $email)->first();    // check in database whether a user with the input email exists or not
            if ($data) { // if user exists
                $pass = $data['password']; // get hashed password of user from database
                $verify_pass = password_verify($password, $pass); // check if the user password from database does match with input password
                if ($verify_pass) { // if password correct
                    $this->setUserMethod($data); // set user session for login
                    return redirect()->to('/'); // this will redirect user to homepage or user's dashboard
                } else { // if password is not correct
                    $session->setFlashdata('msg', 'Wrong mail or password!'); // set flash session with message and throw session to login page
                    return redirect()->to('/auth/login'); // this will redirect user to login page
                }
            } else { // if user doesnt exist
                $session->setFlashdata('msg', 'Wrong mail or password!'); // set flash session with message and throw session to login page
                return redirect()->to('/auth/login'); // this will redirect user to login page
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
        
        if ($this->request->getMethod() == 'post') { // check method of register form, whether it is a post or not

            if (!$this->validate([ // validation for registration form
                'fullname' => 'required',       // the left one is the name of field name in the form, ex. fullname, occupation, gender, etc.
                'occupation' => 'required',     // the right one is the rule, required means the field cannot be empty
                'gender' => 'required',
                'birthdate' => 'required',
                'workout_time' => 'required',
                'email' => 'required|valid_email|is_unique[authorized_users.email]',    // valid_email is for checking email is valid or not, is_unique[authorized_users.email] means check the input email is already exist in database or not
                'password' => 'required|greater_than_equal_to[6]', // greater_than_equal_to[6] is for checking the password length must be at least 6 characters
                'confirm_password' => 'required|matches[password]', // matches means confirm password field must have the same value with the value of password field
            ])) {
                $validation = \Config\Services::validation();  // initialize validation

                return redirect()->to('/auth/register')->withInput()->with('validation', $validation);  // if the requirements are not fulfilled, this will redirect user to register page and throw message to registration page
            }

            $data = [
                'fullname' => $this->request->getVar('fullname'), // get the fullname from fullname field in the form
                'occupation' => $this->request->getVar('occupation'),// get the occupation from occupation field in the form
                'gender' => $this->request->getVar('gender'),// get the gender from gender field in the form
                'birthdate' => $this->request->getVar('birthdate'),// get the birthdate from birthdate field in the form
                'workout_time' => $this->request->getVar('workout_time'),// get the workout_time from workout_time field in the form
                'created_at' => \Carbon\Carbon::now(), // get current time
                'updated_at' => \Carbon\Carbon::now(), // get current time
            ];
            // the left one, ex. fullname, occupation, gender, birthdate are column names in users table in database

            $this->userModel->insert($data); // this will insert data to users table in database

            $id_user = $this->userModel->getInsertID(); // this is for getting the last inserted id of registered user

            $data = [
                'id_user' => $id_user,
                'email' => $this->request->getVar('email'), // get the email from email field in the form
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT), // hashing user password with PASSWORD_DEFAULT algorithm
                'role' => 2, // role 2 means general user, while 1 means admin
                'created_at' => \Carbon\Carbon::now(), // get current time
                'updated_at' => \Carbon\Carbon::now(), // get current time
            ];

            $this->authorizedUserModel->insert($data); // this will insert data to authorized_users table in database

            return redirect()->to('/auth/login'); // this will redirect user to login page
        }

        $data = [
            'title' => 'Create Account',
            'validation' => Services::validation()  // this is for throwing validation message to view
        ];
        echo view('auth/register', $data);
    }

    public function logout()
    {
        session()->destroy(); // Destroying all session to logout
        return redirect()->to('/'); // this will redirect user to landing page
    }

    // update profile tak payah dulu
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

    //this function is for set session login for the user
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
        ];
        
        $session->set($ses_data);
    }

    //--------------------------------------------------------------------

}
