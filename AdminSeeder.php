<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [   
                'ID'=> 'A001',
                'first_name'=> 'admin',
                'last_name'=> 'BNCC',
                'email'=> 'adminBNCC@gmail.com',
                'password'=> md5('Admin123'),
                'bio'=> 'Hi my name is Admin, and I like backend development.',
            ],
        ];

        foreach($userData as $key => $val){
            Admin::create($val);
        }
    }
}
