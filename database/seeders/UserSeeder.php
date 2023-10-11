<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => 'Teamleader',
            'email' => 'Teamleader@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Teamleader');

        User::create([
            "name" => 'Editor',
            'email' => 'Editor@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Editor');

        User::create([
            "name" => 'Viewer',
            'email' => 'Viewer@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Viewer');

        User::create([
            "name" => 'Teamleader2',
            'email' => 'Teamleader2@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Teamleader');

        User::create([
            "name" => 'Editor2',
            'email' => 'Editor2@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Editor');

        User::create([
            "name" => 'Viewer2',
            'email' => 'Viewer2@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Viewer');
    }
}
