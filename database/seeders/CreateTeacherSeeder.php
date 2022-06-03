<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = [
            // [
            //     'name' => 'kashif Raza',
            //     'email' => 'kashif.raza@cp.com',
            //     'type' => 'teacher',
            //     'password' => bcrypt('123456'),
            // ],

            [
                'name' => 'junaid Masood',
                'email' => 'junaid.masood@cp.com',
                'type' => 'teacher',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($teacher as $key => $value) {
            User::create($value);
        }
    }
}
