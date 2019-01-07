<?php

use Illuminate\Database\Seeder;
// use Database\Seeds\StoriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StoriesTableSeeder::class);
    }
}
