<?php

use Illuminate\Database\Seeder;
use App\Movie;
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

        Movie::truncate();
        Eloquent::unguard();

        $this->call([
            MoviesTableSeeder::class,
        ]);
    }
}
