<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('posts')->insert([
                'title' =>$faker->sentence,
                'body' => $faker->text
            ]);
        }
    }
}
