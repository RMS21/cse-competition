<?php

use Illuminate\Database\Seeder;
use App\ReviewRequest;

class ReviewRequestsSeeder extends Seeder
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
          $requested_problem = new ReviewRequest();
          $requested_problem->team_id = $i;
          $requested_problem->problem_id = rand(1, 20);
          $requested_problem->state = rand(1, 3);
          $requested_problem->save();
        }
      }
    }
}
