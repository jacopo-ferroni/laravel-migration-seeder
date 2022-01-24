<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 20; $i++) { 
            $new_travel = new Travel();
            $new_travel->state = $faker->word();
            $new_travel->city = $faker->word();
            $new_travel->location_descriptio = $faker->text(300);
            $new_travel->hotel_description = $faker->text(300);
            $new_travel->advisor = rand(0, 5);
            $new_travel->image = $faker->imageUrl(640, 480, 'animals', true);

            $new_travel->save();
        }
    }
}
