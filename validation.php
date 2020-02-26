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
session_start();
require_once("condb.php");
$name = $_POST['user']; 
$pass = $_POST['password']; 
$s = " select * from login where name = '$name' && password ='$pass'"; 
$result = mysqli_query($con, $s); 
$num = mysqli_num_rows($result); 
if($num == true)
{
    header('location:home.php');
}
else
{ 
    echo '<font color="red"><font size="20px"><p align="center">YOUR USER & PASSWORD IS INVALID!</p></font>';
} 
?>