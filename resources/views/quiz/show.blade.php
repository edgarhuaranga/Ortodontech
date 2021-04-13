@extends('layouts.master')
@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">{{$quiz->category()->name}}/{{$quiz->topic}}</h1>
        </div>
    </div>
</div>
<!-- END Hero -->
<div class="content">
    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">All questions</h3>
            <div class="block-options">
                <a href="/quizzes/{{$quiz->id}}/new">
                  <button type="button" class="btn btn-sm btn-primary">
                      <i class="fa fa-plus">New question</i>
                  </button>
                </a>

            </div>
        </div>
        <div class="block-content">

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Question</th>
                            <th style="width: 10%;">Option A</th>
                            <th style="width: 10%;">Option B</th>
                            <th style="width: 10%;">Option C</th>
                            <th style="width: 10%;">Option D</th>
                            <th style="width: 10%;">Respuesta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($questions as $question)
                          <tr>
                              <td class="font-w600">
                                  <a href="/questions/{{$question->id}}">{{$question->statement}}</a>
                              </td>
                              <td>{{$question->option1}}</td>
                              <td>{{$question->option2}}</td>
                              <td>{{$question->option3}}</td>
                              <td>{{$question->option4}}</td>
                              <td>{{$question->answer}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Full Table -->

</div>

</main>
<!-- END Main Container -->



</div>
<!-- END Page Container -->
@endsection
