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

        $team1 = new  Team();
        $team1->name = "team";
        $team1->password = bcrypt("team");
        $team1->role = "member";
        $team1->score = "100";
        $team1->level = "A";
        $team1->save();
    }
}
