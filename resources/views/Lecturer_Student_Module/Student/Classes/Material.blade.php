<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Cl, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="classes.css">
    <title>Materials</title>
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
        <li><a href="{{route('Stud_Class')}}" data-hover="Class">Class</a></li>
            <li><a href="{{route('Stud_Students')}}" data-hover="Students">Students</a></li>
            <li class="current"><a href="#" data-hover="Material">Material</a></li>
            <li><a href="{{route('Stud_Assignment')}}" data-hover="Assignments">Assignments</a></li>
        </ul>
    </div>
    <div class="lec-materials">

        <a href="#create-topic">
            <button>+ CREATE TOPIC</button>
        </a>

        <div class="overlay" id="create-topic">
            <div class="wrapper">

                <a id="close" href="#"><i class="las la-times"></i></a>

                <div class="content">
                    <div class="container">
                        <form action="" method="POST">
                            <label for="TopicName">Topic Name</label>
                            <input class="input" type="text" name="topic_name" id="topic_name">

                            <button id="create-btn" type="submit" name="submit">CREATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="TopicName">Topic Name</label>
            <select class="input" id="TopicName" name="TopicName">
                <option value=""></option>
                <option value="Topic 1"></option>

            </select>
            <label for="MaterialName">Material Name</label>
            <input class="input" type="text" id="MaterialName" name="MaterialName">

            <label for="File">Upload File</label>
            <div class="mini-section">
                <div class="file">
                    <input class="file-input" type="file" id="File name=" material">
                </div>
                <button id="post-btn" name="post">POST</button>
            </div>
        </form>
    </div>

</body>

</html>