<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Movie;
class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 30) as $index)
        {
            Movie::Create([
                'title' => $faker->sentence(5),
                'body' => $faker->paragraph(4)
            ]);
        }
    }
}
