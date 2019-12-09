<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates 10 Posts using the PostFactory.
        factory(App\Post::class, 10)->create();
    }
}
