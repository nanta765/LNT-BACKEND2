<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peopleData = [
            [   
                'ID'=> '1',
                'first_name'=> 'Yasin',
                'last_name'=> 'Taryaqil Aghyar',
                'email'=> 'VX2OY@example.com',
                'bio'=> 'Hi my name is Admin, and I like backend development.',
            ],
        ];

        foreach($peopleData as $key => $val){
            People::create($val);
        }
    }
}
