<?php

use Illuminate\Database\Seeder;
use App\BuyProblem;

class BuyProblemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 2; $i < 5; $i++){
        for($j = 1; $j < 10; $j++){
          $buyed_problem = new BuyProblem();
          $buyed_problem->team_id = $i;
          $buyed_problem->problem_id = rand(1, 20);
          $buyed_problem->save();
        }
      }
    }
}
