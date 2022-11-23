<?php $title = "Attendance";
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
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/top_header.css') }}">
    <title>Attendance</title>
</head>

<body>

    @include("Lecturer_Student_Module.Lecturer.sidebar_main");
    <div class="main-content">
        @include("Lecturer_Student_Module.Lecturer.top_header");
        <main>
            <div class="classes">
                <div class="class-1">
                    <form action="">
                        <div class="class-desc">
                            <button type="submit" name="choose_class">
                                <h4>ICS 1221</h4>
                                <h4>Advanced Networking</h4>
                                <hr>
                                <h5>Phoebe Buffay</h5>
                                <p>70 Students</p>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="class-1">
                    <form action="">
                        <div class="class-desc">
                            <button type="submit" name="choose_class">
                                <h4>ICS 1221</h4>
                                <h4>Advanced Networking</h4>
                                <hr>
                                <h5>Phoebe Buffay</h5>
                                <p>70 Students</p>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="class-1">
                    <form action="">
                        <div class="class-desc">
                            <button type="submit" name="choose_class">
                                <h4>ICS 1221</h4>
                                <h4>Advanced Networking</h4>
                                <hr>
                                <h5>Phoebe Buffay</h5>
                                <p>70 Students</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

</body>

</html>