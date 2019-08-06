<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use App\Answer;
use App\Post;
use App\Quiz;
use App\Category;


use Illuminate\Support\Facades\DB;
use App\Http\Resources\QuestionCollection;
use App\Http\Resources\User as ApiUser;
use App\Http\Resources\Answer as ApiAnswer;
use App\Http\Resources\Post as ApiPost;
use App\Http\Resources\Question as ApiQuestion;
use App\Http\Resources\Quiz as ApiQuiz;
use App\Http\Resources\Category as ApiCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      return new QuestionCollection(Question::all());
    }

    public function quizesByCategory(){

      $quizzes = Category::all();

      return response()->json([
        'requestType' => request('requestType'),
        'data' => ApiCategory::collection($quizzes)
      ]);
    }

    public function posts(){
      return response()->json([
        'requestType' => request('requestType'),
        'data' => ApiPost::collection(Post::orderBy('created_at', 'desc')->get())
      ]);
    }

    public function ranking(){
      return response()->json([
        'requestType' => request('requestType'),
        'data' => ApiUser::collection(User::all())
      ]);
      #return ApiUser::collection(User::all());
    }

    public function store(Request $request){
      if( request('requestType') == 'store_user'){
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->city = request('city');
        $user->birthday = request('birthday');
        $user->save();

        return new ApiUser($user);
      }

    }

    public function checkUser(Request $request){

      if( request('requestType') == 'check_user' ){
        $user =  User::where('email', request('email'))->get();
        if($user->count() > 0){
          return new ApiUser($user->first());
        }
        else{
          return response()->json([
            'status' => 'error',
            'message' => 'User not found'
          ]);
        }
      }
    }

    public function show($id){
        $user = User::find($id);
        if(is_null($user)){
          return response()->json([
            'status' => 'error',
            'message' => 'User not found'
          ]);
        }
        else{
          return new ApiUser($user);
        }

    }

    public function userAnswers($id){
      $user = User::find($id);
      if(is_null($user)){
        return response()->json([
          'status' => 'error',
          'message' => 'User not found'
        ]);
      }
      else{
        return response()->json([
          'requestType' => request('requestType'),
          'data' => ApiAnswer::collection($user->answers()->get())
        ]);

      }
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }

    public function checkAnswer(Request $request, $id){
      $question = Question::find($id);
      $user = User::find(request('userid'));
      $message = "Message not defined";
      $answer_state = 0;
      $points_received = 0;
      $status = "ok";

      if(!is_null($question)){
        if(!is_null($user)){
          $user_answer = request('myanswer');
          if($user_answer == 0){
            $message = "Blank";
            $answer_state = 3;
            $points_received = 1;
          }
          elseif($question->answer == $user_answer){
            $message = "Correct";
            $answer_state = 1;
            $points_received = 3;
          }
          else{
            $message = "Incorrect";
            $answer_state = 2;
            $points_received = 0;
          }

          $answer = new Answer();
          $answer->user_id = $user->id;
          $answer->question_id = $question->id;
          $answer->user_answer = $user_answer;
          $answer->answer_state = $answer_state;
          $answer->points_received = $points_received;
          $answer->save();
        }
        else{
          $message = "User not found";
        }
      }
      else{
        $message = "Question not found";
      }


      $question = Question::where('quiz_id', $question->quiz_id)->inRandomOrder()->first();


      return response()->json([
        'status'=>$status,
        'message'=>$message,
        'points' =>$points_received,
        'question'=>$question,
        ]);

    }

    public function quizResume(Request $request){
      $user = User::find(request('user_id'));
      $quiz = Quiz::find(request('quiz_id'));

      $questions = Question::where('quiz_id', $quiz->id);
      $questionArrayId = Question::where('quiz_id', $quiz->id)->get()->pluck('id');
      $answers = $user->answers()->whereIn('question_id', $questionArrayId)->get();

      $correctAnswers = $user->answers()->whereIn('question_id', $questionArrayId)->where('answer_state', 1)->get()->count();

      return response()->json([
        'requestType'=> request('requestType'),
        'answers'=>ApiAnswer::collection($answers),
        'ranking'=>$quiz->ranking(),
        'progress'=>$correctAnswers/$questionArrayId->count()*100,
      ]);
    }

    public function requestQuestion(Request $request){
      $user = User::find(request('user_id'));
      $quiz = Quiz::find(request('quiz_id'));

      $question = Question::where('quiz_id', $quiz->id)->inRandomOrder()->first();

      return response()->json([
        'requestType' => request('requestType'),
        'question' => $question,
      ]);
    }

    public function userStats($id){
      $user = User::find($id);
      $idsQuestions = Answer::where('user_id', $user->id)->where('answer_state', 1)->distinct('question_id')->pluck('question_id');
      $mostTopics = Question::selectRaw('quizzes.topic, count(questions.quiz_id) as avance')
                  ->whereIn('questions.id', $idsQuestions)
                  ->join('quizzes', 'quizzes.id', 'questions.quiz_id')
                  ->groupBy('quizzes.topic')
                  ->orderBy('avance','desc')
                  ->take(3)
                  ->get();


      $history = Answer::selectRaw("count(*) as total,
                                    count(if(answer_state=1, 1, null)) as correctas,
                                    count(if(answer_state=2, 1, null)) as incorrectas,
                                    count(if(answer_state=3, 1, null)) as blancas,
                                    sum(points_received) as puntaje,
                                    DATE_FORMAT(created_at, '%Y-%m-%d') as fecha")
                      ->where('user_id', $user->id)
                      ->whereBetween('created_at', [Carbon::today()->subDays(30), Carbon::now()])
                      //->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()])
                      ->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"), 'asc')
                      ->groupBy([DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')")])
                      ->get();

      $puntaje = Answer::where('user_id', $user->id)->sum('points_received');
      $qCorrectos = Answer::where('user_id', $user->id)->where('answer_state', 1)->count();
       //return $history;
       return response()->json([
         'requestType' => request('requestType'),
         'history' => $history,
         'topTopics'=>$mostTopics,
         'puntos'=>$puntaje,
         'q_correctos'=>$qCorrectos,
       ]);
    }

    public function userProfile($id){
      $user = User::find($id);

      $puntaje = Answer::where('user_id', $user->id)->sum('points_received');
      $qCorrectos = Answer::where('user_id', $user->id)->where('answer_state', 1)->count();
      $answers = Answer::where('user_id', $user->id)->get();
       //return $history;
       return response()->json([
         'requestType' => request('requestType'),
         'answers'=>ApiAnswer::collection($answers),
         'puntos'=>$puntaje,
         'q_correctos'=>$qCorrectos,
       ]);


    }


}
