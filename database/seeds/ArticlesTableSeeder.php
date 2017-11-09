<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate existing records to start from scratch
        Article::truncate();

        $faker = \Faker\Factory::create();

        //create few articles
        for($i=0;$i<50;$i++){
            Article::create([
                'title'=>$faker->sentence,
                'body'=>$faker->paragraph,
            ]);
        }
    }
}
