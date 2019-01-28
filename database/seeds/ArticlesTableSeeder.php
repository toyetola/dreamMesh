<?php

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
        $faker =  Faker\Factory::create();

        for($i=0; $i<50; $i++){
            \App\Article::insert([
                'title' =>$faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
