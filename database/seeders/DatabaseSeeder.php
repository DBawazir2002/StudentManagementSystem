<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::insert([
            'name' => 'admin',
            'userName' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminadmin'),
        ]);

        Student::insert([
            'name' => 'test',
            'userName' => 'test',
            'email' => 'user@gmail.com',
            'password' => Hash::make('useruser'),
            'classStudy_id' => '1',
            'gender' => 'Meal',
            'dateOfBirth' => now(),
            'studentIdentity' => 'useruser',
            'fatherName' => 'fatherName',
            'motherName' => 'motherName',
            'contactNumber' => rand(5,10),
            'address' => 'Yemen',
            'dateOfAdmission' => now(),
        ]);
    }
}
