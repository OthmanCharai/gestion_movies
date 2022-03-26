<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
         *  ask user to enter number of user that he want
         */
        $nbUser=(int)$this->command->ask("type User Number");

        /**
         *  use UserFactory class to genrate fake data
         */
        User::factory()->count($nbUser)->create();

    }
}
