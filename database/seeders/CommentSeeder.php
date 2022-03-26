<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         *  ask user to enter number of comment that he want
         */
        $nbCommet=(int)$this->command->ask("type Comment Number");
        /**
         *  get all users
         */
        $users=User::all();

        /**
         * get all series
         */
        $series=Serie::all();

        /**
         *  use CommentFactory class to create fake data
         *  because we have rlt between comment-user and comment-serie we have to loop foreach comment (count)
         */
        Comment::factory()->count($nbCommet)->make()->each(function ($comment) use($users,$series) {
            $comment->serie_id=$series->random()->id;
            $comment->user_id=$users->random()->id;
            $comment->save();
        });

    }
}
