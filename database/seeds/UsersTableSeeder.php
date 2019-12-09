<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates 10 Users using the UserFactory.
        factory(App\User::class, 10)->create();
    }
}
