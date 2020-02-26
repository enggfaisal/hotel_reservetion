<?php
require_once("condb.php");
?>
<html>
    <head>
        <title>File</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body
            {
                font-family: sans-serif;
                font-size: 11pt;
                background-image: url(background.jpg);
                background-size: cover;
                background-attachment: fixed;
            }
    
            .icon-bar 
            {
                margin-top: 42px;
                width: 90px;
                background-color: #555;
            }

            .icon-bar a 
            {
                display: block;
                text-align: center;
                padding: 16px;
                transition: all 0.3s ease;
                color: white;
                font-size: 36px;
            }
            
            .icon-bar a:hover 
            {
                background-color: #000;
            }

            .active 
            {
                background-color: #4CAF50;
            }
        </style>
    </head>
</html>

<body>
    <div class="icon-bar" style="float:left">
        <a class="active" href="index.php"><i class="fa fa-home"></i></a> 
        <a href="#"><i class="fa fa-user"></i></a> 
        <a href="#"><i class="fa fa-table"></i></a>
        <a href="#"><i class="fa fa-file"></i></a>
        <a href="#"><i class="fa fa-trash"></i></a>
        <a href="#"><i class="fa fa-envelope"></i></a> 
    </div>
</body>


<?php
require_once("condb.php");
$name = $_POST['user']; 
$pass = $_POST['password']; 
$s = " select * from login where name = '$name'"; 
$result = mysqli_query($con, $s); 
$num = mysqli_num_rows($result); 
if($num == 1)
{
    echo '<font color="red"><font size="50px"><p align="center">ALREADY TAKEN!</p></font>'; 
}
else
{ 
    $reg= " insert into login(name , password) values ('$name' , '$pass')"; 
    mysqli_query($con, $reg); 
    echo '<font color="green"><font size="50px"><p align="center">REGISTARION SUCCESSFUL!</p></font>';
} 
?>
<html>  
    <head>
    <title>User Login and Registration</title>
    <link rel="stylesheet"type="text/css" href="registration.css">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <style>
            .login-box{
    max-width: 700px;
    float: none;
    margin: 150px auto;
}
.login-left{
    background: rgba(211, 211, 211, 0.5);
    padding: 30px;
}
.login-right{
    background: #fff;
    padding: 30px;
}
.form-control{
    background-color: transparent !important;
}
        </style>
        
    </head>
    <body>     
        <div class="container"> 
            <div class="login-box">
                <div class="row"> 
                    <div class="col-and-6 login-left">
                        <h2> Login Here </h2>
                        <form action="validation.php" method="post" > 
                            <div class="form-group"> 
                                <label>Usename</label> 
                                <input type="text" name="user" class="form-control" required>
                            </div> 
                            <div class="form-group"> 
                                <label>Password</label> 
                                <input type="password" name="password" class="form-control" required> 
                            </div> 
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

                                                                           