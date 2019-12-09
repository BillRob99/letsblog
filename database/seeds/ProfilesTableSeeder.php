<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates 10 Profiles using the ProfileFactory.
        factory(App\Profile::class, 10)->create();
    }
}
