<?php $title = "Update Results";
$link = "{{route('Lec_Results_Selelct')}}";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/results.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/top_header.css') }}">

    <title>Update Results</title>
</head>

<body>
    @include("Lecturer_Student_Module.Lecturer.sidebar_main");
    <div class="main-content">
        @include("Lecturer_Student_Module.Lecturer.top_header");
        <div class="nav">
            <ul class="snip1168">
                <li class="current"><a href="#" data-hover="Update Results">Update Results</a></li>
                <li><a href="{{route('view_results')}}" data-hover="View Class Results">View Class Results</a></li>
            </ul>
        </div>

        <a href="#new-exam">
            <button id="create-exam">+ CREATE EXAM</button>
        </a>

        <div class="overlay" id="new-exam">
            <div class="wrapper">

                <a id="close" href="#"><i class="las la-times"></i></a>

                <div class="content">
                    <div class="container">
                        <form action="" method="post">
                            <label for="ExamName">Exam Name</label>
                            <input class="input" type="text" name="ExamName" id="ExamName">


                            <label for="UnitCode">Unit Code</label>
                            <select class="input" id="UnitCode" name="UnitCode">
                                <option value="hide"></option>
                            </select>
                            <label for="date">Date</label>
                            <input class="input" type="date" id="date" name="date">

                            <label for="MaxScore">Max Score</label>
                            <input class="input" type="number" id="MaxScore" name="MaxScore">

                            <label for="Weight">Weight (%)</label>
                            <input class="input" type="number" id="Weight" name="Weight">

                            <button type="submit" id="create-btn" name="submit">CREATE</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="choose-exam">
            <div class="col-2">
                <h2 id="choosehead1">Choose Exam</h2>
                <hr />
                <form method="post" action="" id="form1">
                    <select class="input" id="ExamName" name="ExamName">
                        <option value=""></option>
                    </select>

                    <button type="submit" name="ExamChooser"><i class="las la-check"></i></button>
                </form>
            </div>
        </div>


        <div class="record-marks">
            <h2>Student Results</h2>
            <hr>

            <form action="" method="post">
                <table>
                    <tr>
                        <td>14189 </td>
                        <td>Rachel Green</td>
                        <td><input class="input" type="number" name="marks[]" id="marks" value=""></td>
                        <td>/60</td>
                    </tr>
                    <tr>
                        <td>14189 </td>
                        <td>Rachel Green</td>
                        <td><input class="input" type="number" name="marks[]" id="marks" value=""></td>
                        <td>/60</td>
                    </tr>
                </table>
                <button type="submit" id="final_submit" name="result_submit">SUBMIT</button>

            </form>
        </div>
    </div>
</body>

</html>