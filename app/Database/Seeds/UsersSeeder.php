<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class UsersSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'fullname' => 'Admin',
            'occupation' => 'Student',
            'gender' => 'male',
            'birthdate' => '01-01-2000',
            'workout_time' => 'morning',
            'created_at' => Time::now(),
            'updated_at' => Time::now(),
        ];

        $this->db->table('users')->insert($data);
        $id_user = $this->db->insertID();

        $this->db->table('authorized_users')->insert([
            'id_user' => $id_user,
            'email' => 'admin@email.com',
            'password' => password_hash('123', PASSWORD_DEFAULT),
            'role' => '1',
            'created_at' => Time::now(),
            'updated_at' => Time::now(),
        ]);
    }
}
