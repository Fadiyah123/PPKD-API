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
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '12345678'
            ],
            [
                'name' => 'Fadiyah',
                'email' => 'fadiyah@gmail.com',
                'password' => '12345679'
            ],
            [
                'name' => 'Farah',
                'email' => 'farah@gmail.com',
                'password' => '12345670'
            ],
            [
                'name' => 'Kezia',
                'email' => 'kezia@gmail.com',
                'password' => '12345677'
            ],
            [
                'name' => 'Kamila',
                'email' => 'kamila@gmail.com',
                'password' => '12345676'
            ],
        ];

        User::insert($users);
    }
}