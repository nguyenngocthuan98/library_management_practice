<?php

use Illuminate\Database\Seeder;
use App\Models\Borrow;

class BorrowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Borrow::class, 50)->create();
    }
}
