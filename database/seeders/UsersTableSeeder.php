<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'            => 'Admin',
                'email'           => 'admin@mail.com',
                'password'        => Hash::make('admin'),
                'remember_token'  => NULL,
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
            [
                'name'            => 'Alfath',
                'email'           => 'alfath@mail.com',
                'password'        => Hash::make('admin'),
                'remember_token'  => NULL,
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
        ];

        User::insert($users);
    }
}
