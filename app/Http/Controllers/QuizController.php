<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Category;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $quizzes = Quiz::all();
      return view('quiz/index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($quizid)
    {   
        $quiz = Quiz::find($quizid);
        return view('quiz/create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quiz $quiz)
    {
        $cover = $request->file('image_statement');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $question = new Question;
        $question->quiz_id = $quiz->id;
        $question->statement = request('question_statement');
        $question->option1 = request('question_optionA');
        $question->option2 = request('question_optionB');
        $question->option3 = request('question_optionC');
        $question->option4 = request('question_optionD');
        $question->answer = request('radios_options');
        $question->mime= $cover->getClientMimeType();
        $question->original_filename= $cover->getClientOriginalName();
        $question->filename= $cover->getFilename().'.'.$extension;
        $question->save();
        return redirect('/quizzes/'.$quiz->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        $questions = Question::where('quiz_id', $quiz->id)->get();

        return view('quiz/show', compact('questions', 'quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
