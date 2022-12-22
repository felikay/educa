<!DOCTYPE html>
<html>

<head>
    <title>a login form</title>
    <link rel="stylesheet" href="task.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    

<style>
body{
    background-color:whitesmoke;
   
}
.input{
    background-size:cover;
    background-color:white;
    width: 500px;
    height: 900px;
    margin: 90px auto;
    padding: 40px 80px;

}

.title{
    font-size: 20px;
    font-weight:50px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    
}
.sign{
    color: blueviolet;
    text-decoration: none;

}
.input-container {
    display: flex;
    flex-direction: column;
    padding: 15px 15px;
    border: 1px solid #a5a5a5;
    border-radius: 5px;
    margin-top: 17px;
    margin-bottom: 18px;
    display:block;

}

.input-container input {
    border: none;
    outline:none;
    margin-top: 8px;
    display: flex;
    flex-direction:row ;
    
}

.sign:hover{
    text-decoration: underline;
}
.check{
    margin-bottom: 18px;
}
.button{
    padding:20px;
    width:200px;
    padding-bottom:15px ;
   
    padding-top:15px ;
    align-content: center;
    border-radius: 5px;
    background-color:maroon;
    margin-left:90px;
    border-color: maroon;
    color: white;
    font-size: 19px;

}
.button:hover{
    cursor: pointer;
    text-decoration: none;
}
input[type="checkbox"]{
    appearance: none;
    -webkit-appearance:none;
    height:20px;
    width:20px;
    background-color:GREY;
    display:flex;
    align-items: center;
    justify-content:center;
    border-radius: 3px;
    
}
input[type="checkbox"]:hover{
    cursor:pointer;
    background-color:GREY;

   

}
.check{
    display: flex;
    flex-direction: row;
    
}
input[type="checkbox"]:after{
    content:"\f00c";
    font-family: fontawesome ;
    font-size: 13px;
    font-weight: bold;
    font-style: normal;
    color:white;
   margin-left: 3px;
   margin-top: 0.5px;
   display: none;
}
input[type="checkbox"]:checked{
    background-color:blueviolet;
}
input[type="checkbox"]:checked:after{
    display: block;

}

#hide1{
    display:none;
}

.eyes{
    position:absolute;

}</style>

</head>

<body>
   <H1> EDUKA SCHOOL STAFF</H1>
    <form action="{{route('staffregister')}}" method="POST">
        @csrf
    <div class="input">
        <p class="title">Register a staff members</p>
        
        <div class="input-container">
            <label for="fname">name</label>
            <input type="text" name="name" id="name" placeholder="Type here...">
        </div>
        
        <div class="input-container">
            <label for="lname">Email</label>
            <input type="text" name="email" id="email" placeholder="Type here...">
        </div>
         <div class="input-container">
            <label for="lname">Department</label>
            <input type="text" name="department" id="department" placeholder="Type here...">
        </div>
        
           
            <input type="hidden" name="role" id="role" placeholder="Type here..." value="3" readonly>
       

        <div class="input-container">
            <label for="pname">password</label>
            <input type="password" name="password" id="pname">
            <span class="eyes" onclick="myfunction()">
            <i id="hide1" class="fa fa-eye"></i>
            <i id="hide2"class="fa fa-eye-slash"></i>
            
        </span>
        </div>
        
       <a href="#" ><button class="button">create account</button></a>
       <br></br>
        <a href="#" ><button class="button">back home</button></a>
         
    </div>
    

</form>
<script>
    function myfunction(){
var x=document.getElementById("input");
var y=document.getElementById("hide1");
var z=document.getElementById("hide2");
if(x.type==="password"){
    x.type="text";
    y.style.display="block";
    z.style.display="none";
}
else{
    x.type="password";
    y.style.display="none";
    z.style.display="block";
}

}
</script>
</body>

</html>