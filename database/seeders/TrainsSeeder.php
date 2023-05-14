<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $train = new Train();

            $train->azienda = $faker->words(1, true);
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->data_partenza = $faker->dateTime();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(0, 1000);
            $train->numero_carrozze = $faker->numberBetween(0, 9);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
    
            $train->save();
        }

    }
}
