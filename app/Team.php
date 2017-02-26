<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Team extends Authenticatable{

  public function users(){
    return $this->hasMany('\App\User');
  }

  public function buyedProblems(){
    return $this->belongsToMany('\App\Problem', 'buy_problems');
  }

  public function reviewedProblems(){
    return $this->belongsToMany('\App\Problem', 'review_requests');
  }

}
