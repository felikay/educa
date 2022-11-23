<?php $title = "View Results";
$link = "{{route('Lec_Results_Selelct')}}";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .credentials {
            margin-left: auto;
            margin-right: 0;
            display: flex;
            flex-direction: row;
            text-align: center;
            justify-content: center;
        }

        .credentials h3 {
            margin-top: 20px;
            margin-right: 5px;
            font-size: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="{{ URL::asset('css/results.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/top_header.css') }}">
    <title>View Results</title>
</head>

<body>
    @include("Lecturer_Student_Module.Lecturer.sidebar_main");
    <div class="main-content">
        @include("Lecturer_Student_Module.Lecturer.top_header");
        <div class="nav">
            <ul class="snip1168">
                <li><a href="{{route('update_results')}}" data-hover="Update Results">Update Results</a></li>
                <li class="current"><a href="#" data-hover="View Class Results">View Class Results</a></li>
            </ul>
        </div>
        <div class="record-marks">
            <h2>Student Results</h2>
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>Adm No</th>
                        <th>Name</th>
                        <th>CAT 1</th>
                        <th>CAT 2</th>
                        <th>Exam</th>
                        <th>Total</th>
                        <th colspan="1"></th>
                    </tr>
                </thead>

                <form action="" method="post">
                    <tr>
                        <td>13323</td>
                        <td>Joey Tribbiani</td>
                        <td>15/30</td>
                        <td>15/30</td>
                        <td>15/30</td>
                        <td>70</td>
                        <td>
                            <form action="" method="POST">
                                <button name="Edit">Edit</button>
                            </form>
                        </td>
                    </tr>
            </table>


            <div class="overlay" id="edit">
                <div class="wrapper">
                    <a id="close" href="#"><i class="las la-times"></i></a>
                    <div class="content">
                        <div class="container">
                            <form action="" method="post">
                                <h2>Joey Tribbiani</h2>
                                <hr>
                                <br>
                                <label for="mark">CAT 1</label>
                                <input class="input" type="number" id="mark" name="mark[]" value="15">
                                <button type="submit" id="create-btn" name="Edit2">EDIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>