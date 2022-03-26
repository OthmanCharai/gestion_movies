<?php

namespace Database\Seeders;

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

        Serie::factory()->count($nbSerie)->make()->each(function ($serie) use($users) {
            $serie->user_id=$users->random()->id;
            $serie->save();
        });



    }
}
