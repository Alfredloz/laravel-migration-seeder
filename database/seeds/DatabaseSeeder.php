<?php

use App\Contributor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ContributorSeeder::class,
            ArticleSeeder::class
            ]);

    }
}
