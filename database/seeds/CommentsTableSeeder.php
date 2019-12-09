<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates 10 comments using the CommentFactory.
        factory(App\Comment::class, 10)->create();
    }
}
