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
        $team1->name = "team1";
        $team1->password = bcrypt("team1");
        $team1->role = "member";
        $team1->score = "100";
        $team1->level = "A";
        $team1->save();

        $team2 = new  Team();
        $team2->name = "team2";
        $team2->password = bcrypt("team2");
        $team2->role = "member";
        $team2->score = "200";
        $team2->level = "B";
        $team2->save();

        $team3 = new  Team();
        $team3->name = "team3";
        $team3->password = bcrypt("team3");
        $team3->role = "member";
        $team3->score = "300";
        $team3->level = "C";
        $team3->save();

    }
}
