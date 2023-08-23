<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as FakerGenerator;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
    $train = new Train();

    $train->company = $faker->company();
    $train->train_number = $faker->postcode();
    $train->departure_st = $faker->city();
    $train->arrival_st = $faker->city();
    $train->dep_hour = $faker->time('H_i');
    $train->arr_hour = $faker->time('H_i');
    $train->carriages = $faker->randomDigitNot(2);
    $train->delay = $faker->randomDigitNot(2);
    $train->deleted = $faker->boolean();

    $train->save();
    }
}
