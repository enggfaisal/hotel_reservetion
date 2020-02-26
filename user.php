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
        <a class="active" href="home.php"><i class="fa fa-home"></i></a> 
        <a href="user.php"><i class="fa fa-user"></i></a> 
        <a href="insert.php"><i class="fa fa-table"></i></a>
        <a href="file.php"><i class="fa fa-file"></i></a>
        <a href="index.html"><i class="fa fa-trash"></i></a>
        <a href="#"><i class="fa fa-envelope"></i></a> 
    </div>
</body>




<head>
	<meta charset="utf-8">
	<title>Registation Page</title>
	<link rel="stylesheet" type="text/css" href="about.css">
</head>
<body>
  <div class="box">
		<h2>SUBMITTED TO</h2>
<form action="" method="post" enctype="multipart/form-data">
  	<div class="">
    	 <input type="" name="" required="" Value="Md. Masudul Islam">
    </div>
    <div class="">
    	 <input type="" name="" required="" Value="Lecturer of BUBT">
    </div>
  </form>

  <div class="box2">
		<h3>SUBMITTED BY</h3>
<form action="" method="post" enctype="multipart/form-data">
  	<div class="">
    	<input type="" name="" required="" Value="Md. Shariful Islam">  
    </div>
    <div class="">
    	<input type="" name="" required="" Value="Md. Parvej Alam">  
    </div>
    <div class="">
    	<input type="" name="" required="" Value="Raisul Islam">  
    </div>
    <div class="">
    	<input type="" name="" required="" Value="Md. Ashiqur Rahman">  
    </div>
    <div class="">
    	<input type="" name="" required="" Value="S K Hasanuzzaman">  
    </div>
  </form>

  </div>


