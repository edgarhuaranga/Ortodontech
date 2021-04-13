@extends('layouts.master')
@section('content')
<div class="content">
    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        
        <div class="content">
            <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <!-- Best Media -->
                @foreach ($categories as $category)
                <div class="col-md-6 col-xl-4">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <p class="text-uppercase font-w600 text-center mt-2 mb-4">
                                {{$category->name}}
                            </p>
                            @foreach ($category->quizzes() as $quizz)
                            <a class="block block-rounded block-link-rotate bg-body-dark mb-2" href="/quizzes/{{$quizz->id}}">
                                <div class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <p class="font-size-h3 font-w300 mb-0">
                                            {{$quizz->topic}}
                                        </p>
                                        <p class="text-muted font-italic mb-0">
                                            {{$quizz->questions()->count()}} preguntas
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="fab text-muted">
                                            <img style="width:100%;height:100%" src="/uploads/icons/{{$quizz->image_url}}.png" alt="">
                                        </i>
                                    </div>
                                </div>
                            </a>  
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>    
                @endforeach
                
                <!-- END Best Media -->
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
