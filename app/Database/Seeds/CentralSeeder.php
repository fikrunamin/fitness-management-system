<?php

namespace App\Database\Seeds;

class CentralSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('WorkoutsSeeder');
    }
}
