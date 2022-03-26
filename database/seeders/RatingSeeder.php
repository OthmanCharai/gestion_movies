<?php

namespace Database\Seeders;

use App\Models\Serie;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $series=Serie::all();
        $series->each(function($serie){
            $nbRating=(int)$this->command->ask("type Rating Number for series ".$serie->id);
            $users=User::take($nbRating)->get();
            $users->each(function($user)use ($serie){
                $serie->rating()->syncWithoutDetaching($user);
            });
        });
    }
}
