<?php $title = "View Class Attendance";
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



    <title>View Class Attendance</title>
</head>

<body>
    @include("Lecturer_Student_Module.Lecturer.sidebar_main");
    <div class="main-content">
        @include("Lecturer_Student_Module.Lecturer.top_header");
        <div class="nav">
            <ul class="snip1168">
                <li><a href="{{route('update_attendance')}}" data-hover="Update Attendance">Update Attendance</a></li>
                <li class="current"><a href="#" data-hover="View Class Attendance">View Class Attendance</a>
                </li>
            </ul>
        </div>

        <div class="choose-exam">
            <div class="col-2">

                <h2 id="choosehead1">Choose Date</h2>
                <hr />

                <form id="form1" action="" method="post">
                    <input class="input" type="date" name="AttendanceDate" id="AttendanceDate">
                    <button name="select_date"><i class="las la-check"></i></button>
                </form>
            </div>



            <div class="record-marks">
                <h2>View Attendance</h2>
                <hr>

                <form action="" method="post">
                    <table>
                        <tr>
                            <td>13232</td>
                            <td>Mike Ross</td>
                            <td><i class="fa fa-check" aria-hidden="true" style="color: green; font-size: 18pt;"></i></td>
                        </tr>
                        <tr>
                            <td>13232</td>
                            <td>Mike Ross</td>
                            <td><i class="fa fa-times" aria-hidden="true" style="color: red; font-size: 18pt"></i></td>
                        </tr>
                    </table>
                    <form action="" method="POST">
                        <button id="final_submit" name="Edit">Edit</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
</body>

</html>