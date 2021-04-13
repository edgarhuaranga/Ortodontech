<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Answer;
use App\Category;

class Quiz extends Model
{
    public function questions(){
      return Question::where('quiz_id', $this->id)->get();
    }

    public function category(){
      return Category::where('id', $this->category_id)->first();
    }


    public function ranking(){
       $questionArrayId = Question::where('quiz_id', $this->id)->get()->pluck('id');

       $answers = Answer::whereIn('question_id', $questionArrayId)->get();

       $respuestasXUser = Answer::selectRaw('users.name, answers.user_id, sum(answers.points_received) as puntaje, count(if(answers.answer_state=1, 1, null))*100/'.$questionArrayId->count().' as perc_progress')
                                      ->whereIn('answers.question_id', $questionArrayId)
                                      ->groupBy('answers.user_id', 'users.name')
                                      ->join('users', 'users.id', '=', 'answers.user_id')
                                      ->orderBy('puntaje', 'desc')
                                      ->get();

      return $respuestasXUser;
    }
}
