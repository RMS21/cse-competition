<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{

  public function buyedProblemTeames(){
    return $this->belongsToMany('\App\Team', 'buy_problems');
  }

  public function reviewedProblemTeams(){
    return $this->belongsToMany('\App\Team', 'review_requests');
  }

}
