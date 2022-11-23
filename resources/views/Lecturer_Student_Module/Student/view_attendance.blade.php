<?php $title = "Attendance";
$link = "#";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            background-color: white;
            overflow: hidden;
            font-weight: bolder;
            margin: 10px auto;
        }

        table th {
            text-align: left;
        }

        table td {
            padding-top: 5px;
            padding: 10px 0;
            align-items: center;
            border-bottom: 1.1px solid rgb(163, 8, 8);
        }

        table tbody td {
            padding-left: 10px;
        }

        table tbody tr:hover {
            /* background-color: #8c66534d; */
            color: rgb(163, 8, 8);
            /* border-radius: 50px; */
            transition: 0.2s;
        }

        table td img {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 100px;
        }

        table input {
            width: 80px;
            padding: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/lec_classes.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/top_header.css') }}">


    <title>View Attendance</title>
</head>

<body>

    @include("Lecturer_Student_Module.Student.top_header");
    <div class="box">
        <h2>Advanced Networking</h2>
        <hr />
    </div>
    <table class="styled-table">
        <thead>
            <th>Date</th>
            <th>Status</th>
        </thead>
        <tbody>
            <tr class="active-row">
                <td>2022/23/3</td>
                <td><i class="fa fa-check" aria-hidden="true" style="color: green; font-size: 18pt;"></i></td>
            </tr>
            <tr>
                <td>2022/30/3</td>
                <td><i class="fa fa-times" aria-hidden="true" style="color: red; font-size: 18pt"></i></td>
            </tr>
        </tbody>
    </table>

    </div>
    <a href="../Lecturer/attendance_select.html"> <button id="back_btn">BACK</button></a>
</body>