<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Contributor;
class ContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $newContributor = new Contributor();
            $newContributor->name = $faker->name();
            $newContributor->last_name = $faker->lastName();
            $newContributor->country = $faker->country();
            $newContributor->save();
        }
    }
}
