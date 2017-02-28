<?php

use Illuminate\Database\Seeder;
use App\GameStatus;

class GameStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game_status = new GameStatus();
        $game_status->stage = 3;
        $game_status->is_started = 1;
        $game_status->save();

    }
}
