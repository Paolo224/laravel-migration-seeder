<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use PhpParser\Node\Stmt\For_;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 200; $i++) {
            $NewTrain = new train();
            $NewTrain->company = $faker->word();
            $NewTrain->departure_station = $faker->city();
            $NewTrain->arrivals_station = $faker->city();
            $NewTrain->departure_time = $faker->time();
            $NewTrain->arrival_time = $faker->time();
            $NewTrain->train_code = $faker->regexify('[A-Z]{8}[0-9]{5}');
            $NewTrain->number_of_carriages = $faker->numberBetween(1, 50);
            $NewTrain->in_time = $faker->boolean();
            $NewTrain->delete = $faker->boolean();
            $NewTrain->save();
        }
    }
}
