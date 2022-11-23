<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Cl, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/classes.css') }}">
    <title>Students</title>
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
    <div class="nav">
        <ul class="snip1168">
            <li><a href="{{route('Lec_Class')}}" data-hover="Class">Class</a></li>
            <li class="current"><a href="#" data-hover="Students">Students</a></li>
            <li><a href="{{route('Lec_Material')}}" data-hover="Material">Material</a></li>
            <li><a href="{{route('Lec_Assignment')}}" data-hover="Assignments">Assignments</a></li>
        </ul>
    </div>

    <div class="materialbox">
        <h2>Students</h2>
        <div class="total"></div>
        <hr />
        <div class="student">
            <i class="las la-user-alt"></i>
            <div class="admno">141733</div>
            <div class="name">Ross Geller</div>
        </div>

    </div>
</body>

</html>