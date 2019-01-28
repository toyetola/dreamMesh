<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $password = bcrypt('test');

        \App\User::create([
            'name' => "Henry Stanley",
            'email' => "administartor@gmail.com",
            'password' => $password
        ]);


        for($i=0; $i<10; $i++){
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
