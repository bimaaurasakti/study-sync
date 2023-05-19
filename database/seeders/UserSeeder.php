<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin2001'),
            ],
            [
                'role_id' => 2,
                'name' => 'member',
                'email' => 'member@gmail.com',
                'password' => Hash::make('member2001'),
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
