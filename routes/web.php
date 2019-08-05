<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Resources\Quiz as UserResource;
use App\Quiz;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/policy', function (){
  return view('policy', compact('questions'));
});

Route::get('/questions', 'QuestionController@index');
Route::get('/questions/create', 'QuestionController@create');
Route::post('/questions', 'QuestionController@store');
Route::get('/questions/{question}', 'QuestionController@show');

Route::get('/users', 'UserController@index');
Route::get('/ranking', 'UserController@ranking');

Route::get('/answers', 'AnswerController@index');

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');

Route::get('/quizzes', 'QuizController@index');
Route::get('/allquiz', function () {
    return UserResource::collection(Quiz::all())->groupBy(['category_id']);
});
Route::get('/quiz/create', 'QuizController@create');
Route::post('/quizzes', 'QuizController@store');

Route::get('/locations', 'LocationController@index');
Route::get('/signum', 'LocationController@showMap');
Route::get('/signumtwo', 'LocationController@showMapTwo');
