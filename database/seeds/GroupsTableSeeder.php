<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = new Group;
        $g->name = "Tories";
        $g->save();
        $g->profiles()->attach(1);
        $g->profiles()->attach(2);
    }
}
