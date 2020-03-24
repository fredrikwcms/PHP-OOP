<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Auction;

class AuctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 30) as $index) {
            Auction::Create([
                'title' => $faker->sentence(5),
                'details' => $faker->paragraph(4),
            ]);
        }
    }
}
