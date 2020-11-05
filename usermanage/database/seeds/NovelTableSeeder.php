<?php

use Illuminate\Database\Seeder;

class NovelTableSeeder extends Seeder
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
            DB::table('articles')->insert([
                // 'id' => $faker->number,
                'title' => $faker->text,
                'content' => $faker->text,
                'featured_image' => $faker->imageUrl($width = 640, $height = 480),
    }
}
