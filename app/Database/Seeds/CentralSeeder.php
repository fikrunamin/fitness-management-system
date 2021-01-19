<?php

namespace App\Database\Seeds;

class CentralSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('WorkoutsSeeder');
        $this->call('InstructorsSeeder');
    }
}
