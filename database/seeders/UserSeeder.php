<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@innowaysit.com',
            'password' => 'password',
        ]);
        $user->assignRole('ADMIN');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@innowaysit.com',
            'password' => 'password',
        ]);
        $user->assignRole('USER');
    }
}
