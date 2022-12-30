<?php

use Illuminate\Support\Facades\DB;

 $title = "My Classes";
$link = "#";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/lec_classes.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/results.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/top_header.css') }}">
    <title>My Classes</title>
</head>

<body>

    @include("Lecturer_Student_Module.Student.sidebar_main");
    <div class="main-content">
        @include("Lecturer_Student_Module.Student.top_header");
        <main>
            <div style="display: flex;flex-direction:row;margin-left:53%;">
            <a href="#new-exam" style="margin-right: 2%;">
                <button id="create-exam">ENROLL</button>
            </a>
            <a href="#new-exam2">
                <button id="create-exam">UNENROLL</button>
            </a>
            </div>   


            <div class="overlay" id="new-exam">
                <div class="wrapper">

                    <a id="close" href="#"><i class="las la-times"></i></a>

                    <div class="content">
                        <div class="container">
                        <h2>Enroll:</h2>
                        <br>
                            <form method="post" action="{{ route('enroll') }}">
                                @csrf
                                
                                <label for="unit_id">Select Unit</label>
                                <select class="input" id="unit_id" name="unit_id">
                                    <option value=""></option>
                                    @foreach ($data6 as $data6)
                                    
                                    {{$check=DB::table('enrollments')->where('unit_id','=',$data6->id)->where('student_id','=',session('student_id'))->get();}}
                                    @if ($check->isEmpty()) 
                                    
                                    <option value="{{$data6->id}}">{{$data6->unit_name}}</option>
                                    @endif
                                    @endforeach
                                </select>

                                <button type="submit" id="create-btn" name="submit">ENROLL</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

          
            <div class="overlay" id="new-exam2">
                <div class="wrapper">

                    <a id="close" href="#"><i class="las la-times"></i></a>

                    <div class="content">
                        <div class="container">
                        <h2>Unenroll:</h2>
                        <br>
                            <form method="post" action="{{ route('unenroll') }}">
                                @csrf
                                <label for="unit_id">Select Unit</label>
                                <select class="input" id="unit_id" name="unit_id">
                                    <option value=""></option>
                                    @foreach ($data4 as $data4)
                                                                        
                                    <option value="{{$data4->id}}">{{$data4->unit_name}}</option>
                                    @endforeach
                                </select>

                                <button type="submit" id="create-btn" name="submit">UNENROLL</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="classes">
                @foreach($data3 as $data3)
                <div class="class-1">
                    <form action="{{ Route('Stud_Class_unit_selector')}}" method="post">
                        @csrf
                        <div class="class-desc">
                            <button type="submit" name="choose_class">
                                <h2>{{$data3->unit_name}}</h2>
                                <hr>
                                <h3>{{$data3->fname}} {{$data3->sname}}</h3>
                                <p>{{$data3->capacity}} Students</p>
                            </button>
                        </div>
                        <input type="hidden" value="{{$data3->id}}" name="unit_id">
                        <input type="hidden" value="{{$data3->unit_name}}" name="unit_name">
                    </form>
                </div>
                @endforeach
            </div>
        </main>
    </div>

</body>

</html>