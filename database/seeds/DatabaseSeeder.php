<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //by doing so we can seed both dbses just by executing the run() method through the php artisan db:seed command
         $this->call(ArticlesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
