<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = new  Team();
        $team->name = "admin";
        $team->password = bcrypt("admin");
        $team->role = "admin";
        $team->save();
    }
}
