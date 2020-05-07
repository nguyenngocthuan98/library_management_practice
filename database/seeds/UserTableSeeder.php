<?php

use App\Models\User;
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
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123123'), // password
            'role' => 1,
            'birth' => '1111-01-01',
            'address' => 'LocalHost',
            'gender' => 0,
            'phone' => '0123456789',
        ]);
        factory(User::class, 30)->create();
    }
}
