<?php $title = "Update Attendance";
$link = "{{route('Lec_Attendance_Select')}}";
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

    <title>Update Attendance</title>
</head>

<body>

    @include("Lecturer_Student_Module.Lecturer.sidebar_main");
    <div class="main-content">
        @include("Lecturer_Student_Module.Lecturer.top_header");
        <div class="nav">
            <ul class="snip1168">
                <li class="current"><a href="" data-hover="Update Attendance">Update Attendance</a></li>
                <li><a href="{{route('view_class_attendance')}}" data-hover="View Class Attendance">View Class Attendance</a>
                </li>
            </ul>
        </div>
        <div class="choose-exam">
            <div class="col-2">
                <h2 id="choosehead1">Choose Date</h2>
                <hr />

                <form id="form1" action="" method="post">
                    <input class="input" type="date" name="AttendanceDate" id="AttendanceDate" value="">
                    <button name="select_date"><i class="las la-check"></i></button>
                </form>
            </div>
        </div>

        <div class="record-marks">
            <h2>Take Attendance</h2>
            <hr>
            <form action="" method="post">
                @csrf
                <table>
                    <tr>
                        <td>12132</td>
                        <td>Gunther Green</td>
                        <td class="last_col"><input type="checkbox" name="attend" id="attend" checked></td>
                    </tr>
                </table>
                <button type="submit" id="final_submit" name="take_attendance">SUBMIT</button>
            </form>
        </div>
    </div>
</body>

</html>