<?php

namespace App;

use App\Answer;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public function answers(){
    return Answer::where('user_id', $this->id);
  }
}
