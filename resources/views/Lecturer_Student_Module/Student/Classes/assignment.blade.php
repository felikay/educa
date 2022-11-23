<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Cl, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../Lecturer/Classes/classes.css">
    <title>Assignments</title>
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
            <li><a href="{{route('Stud_Material')}}" data-hover="Material">Material</a></li>
            <li class="current"><a href="#" data-hover="Assignments">Assignments</a></li>
        </ul>
    </div>

    <div class="materialbox">
        <a href="#divOne">
            <button>+ CREATE ASSIGNMENT</button>
        </a>
        <h2 id="Ass-head">Assignments</h2>
        <hr />
        <div class="assgn1">
            <a href=""><i class="las la-link"></i>Assignment 1</a>
            <p>Submitted:</p>&nbsp;&nbsp;&nbsp;
            <a href="">Your Submission</a>
            <button name="edit" type="submit" class="edit">EDIT</button>
        </div>

    </div>
    <div class="overlay" id="divOne">
        <div class="wrapper">
            <a id="close" href="#"><i class="las la-times"></i></a>
            <div class="content">
                <div class="container">
                    <form>
                        <label for="TopicName">Topic Name</label>
                        <select class="input" id="TopicName" name="TopicName">
                            <option value="hide"></option>
                            <option value="">Topic 1</option>
                        </select>

                        <label for="AssignmentName">Assignment Name</label>
                        <input class="input" type="text" id="AssignmentName" name="AssignmentName">

                        <label for="deadline">deadline</label>
                        <input class="input" type="date" id="deadline" name="deadline">

                        <label for="description">Description</label>
                        <textarea class="input" id="descripition" name="description"></textarea>

                        <label for="File">Upload File</label>
                        <div class="file">
                            <input class="file-input" type="file" id="maerial" name="material">
                        </div>

                        <button id="create-btn" name="create">CREATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>