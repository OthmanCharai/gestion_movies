<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /**
         *  ask user if he want to rollback migration
         */
        if($this->command->confirm("do you want to rollback migrations ?",true)){
            $this->command->call("migrate:rollback");
            $this->command->info("waiting !!");
            $this->command->call("migrate");
            $this->command->info("dataBase was refreshed !!");
        }

        /**
         *  call to $this->call to execute seeder
         */
        $this->call([
            UserSeeder::class,
            ActeurSeeder::class,
            SerieSeeder::class,
            CommentSeeder::class,
            ContactSeeder::class,
            RatingSeeder::class,
        ]);
    }
}
