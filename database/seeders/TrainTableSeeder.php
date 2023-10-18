<?php

namespace Database\Seeders;

use App\Models\Train;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){

            $train = new Train();
            
            $train ->azienda = $faker->words(3, true); 
            $train ->stazione_di_partenza = $faker->words(3);
            $train ->stazione_di_arrivo = $faker->words(3);
            $train ->orario_di_partenza = $faker->date() . '' . $faker->time();
            $train ->orario_di_arrivo = $faker->date() . '' . $faker->time();
            $train ->Codice_Treno = '81649584';
            $train ->Numero_Carrozze = $faker->randomDigit();
            $train ->In_orario = $faker->randomElement(['in orario', 'in ritardo']);
            $train ->Cancellato = $faker->randomElement(['Cancellato', 'Non cancellato']);
            
            $train->save();
        }
    }
}
