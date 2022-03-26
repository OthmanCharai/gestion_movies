<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
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
        $nbContact=(int)$this->command->ask("type Contact Number");

        /**
         *  use UserFactory class to genrate fake data
         */
        Contact::factory()->count($nbContact)->create();

    }
}
