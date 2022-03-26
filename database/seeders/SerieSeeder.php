<?php

namespace Database\Seeders;

use App\Models\Acteur;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         *  ask user to enter number of user that he want
         */
        $nbSerie=(int)$this->command->ask("type Serie Number");
        /**
         *   get all user
         */
        $users=User::all();
        /**
         *  get all acteurs
         */
        $acteurs=Acteur::all();

        Serie::factory()->count($nbSerie)->make()->each(function ($serie) use($users,$acteurs) {
            $serie->user_id=$users->random()->id;
            $serie->acteur_id=rand(1,10);
            $serie->save();
        });
    }
}
