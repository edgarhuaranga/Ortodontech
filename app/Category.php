<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;

class Category extends Model
{
    //
    public function quizzes(){
        return Quiz::where('category_id', $this->id)->get();
    }
}
