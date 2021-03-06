<?php

use app\Film;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(0,10) as $i){
            DB::table('films')->insert([
                // 'id' => $faker->number,
                'title' => $faker->text($maxNbChars = 10),
                'trailer' => $faker->text($maxNbChars = 250),
                'content' => $faker->text($maxNbChars = 250),
                'name_user' => $faker->text($maxNbChars = 10),
                'comment' => $faker->text($maxNbChars = 250),
                'featured_image' => $faker->imageUrl($width = 640, $height = 480),
            ]);
    }
}
}