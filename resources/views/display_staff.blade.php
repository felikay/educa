<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/classes.css') }}">
    <title>Staff info</title>
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
            padding: 5px;}
    </style>
</head>
<body>
<div class="pic-area">
        <div class="top-menu">
            
                <h2>staff members</h2>
          
            <!-- <i class="las la-bars" > -->
           
            
        </div>
    </div>
    <table class="styled-table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr class="active-row">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->department}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>