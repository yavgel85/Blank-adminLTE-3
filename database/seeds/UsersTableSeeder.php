<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$E9P1SZHmfpMdjwovMHi0Ru3LQtH.nFqJrA4tNy/WOFss0G9UNMZb.',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
