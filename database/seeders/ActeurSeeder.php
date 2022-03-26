<?php

namespace Database\Seeders;

use App\Models\Acteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          /**
         *  ask user to enter number of contact that he want
         */
        $nbContact=(int)$this->command->ask("type Acteur Number");

        /**
         *  use UserFactory class to genrate fake data
         */
        Acteur::factory()->count($nbContact)->create();
    }
}
