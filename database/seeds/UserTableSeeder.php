<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123456789', // password
            'role' => 1,
            'birth' => '1999-08-14',
            'address' => 'Califonia American',
            'gender' => 0,
            'phone' => '0123456789',
        ]);
        factory(User::class, 50)->create();
    }
} 
