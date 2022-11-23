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
    <link rel="stylesheet" href="{{ URL::asset('css/classes.css') }}">

    <title>Assignment Submissions</title>
</head>

<body>
    <div class="pic-area">
        <div class="top-menu">
            <a href="../my_classes.php">
                <h2>Advanced Networking</h2>
            </a>
            <!-- <i class="las la-bars" > -->
            <div class="credentials">
                <h3>Phoebe Buffay</h3>
            </div>
        </div>
    </div>
    <div class="box">
        <h2>Assignment Name</h2>
        <hr />
    </div>
    <table class="styled-table">
        <thead>
            <th>Student Number</th>
            <th>Student Name</th>
            <th>Date Submitted</th>
            <td></td>
        </thead>
        <tbody>
            <tr class="active-row">
                <td>1234</td>
                <td>Monica Bing</td>
                <td>2022/5/7</td>
                <td><a href=""><button>Download</button></a></td>
            </tr>
            <tr class="active-row">
                <td>1234</td>
                <td>Monica Bing</td>
                <td>2022/5/7</td>
                <td><a href=""><button>Download</button></a></td>
            </tr>
        </tbody>
    </table>

    </div>
    <a href="{{route('Lec_Assignment')}}"> <button class="btn" id="back_btn">BACK</button></a>
</body>