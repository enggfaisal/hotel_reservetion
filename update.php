
<?php
require_once("condb.php");
error_reporting(0);
 $_GET['uroom_id'];
 $_GET['uname'];
 $_GET['uemail'];
 $_GET['uphone'];
 $_GET['uaddress'];
 $_GET['ucheck_in'];
 $_GET['ucheck_out'];
?>
<html>
    <head>
        <title>Home Page</title>
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
            table
            {
                margin-left: 495px;
                margin-top: 50px;
                width: 60%;
                height: 20%;
            }
            table, th, td, tr
            {
                border: 5px solid chocolate;
                border-collapse: collapse;
                opacity: 0.95;
            }
            th,td,tr
            {
                padding: 5px;
                text-align: center;
            }
            th
            {
               
                background-color: chocolate;
                color: black;
            }
             tr
            {
               
                background-color: wheat;
                color: black;
            }
            form, input, button 
            {
                position: relative;
                z-index: 1;
                background: chocolate;
                max-width: 360px;
                margin-left: 8px;
                margin-top: 43;
                padding: 15px;
                text-align: center;
            }
            input, button
            {
                font-family: "Roboto",sans-serif;
                outline: 1;
                background: white;
                width: 100%;
                border: 0;
                margin: 0 0 15px;
                padding: 15px;
                box-sizing: border-box;
                font-size: 14px;
                text-align: left;
            }
            
            button 
            {
                font-family: "Roboto",sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: blue;
                width: 100%;
                border: 0;
                padding: 15px;
                color: #ffffff;
                font-size: 14px;
                cursor: pointer;
                text-align: center;
                
            }
    
            .icon-bar 
            {
                margin-top: 43px;
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
    
    <form action="" method="post" enctype="multipart/form-data"  style="float:left">
        <h2>UPDATE</h2>    
        <input type="text" placeholder="ROOM ID" name="uroom_id" value="<?php echo $_GET['uroom_id'];?>"/>
        <input type="text" placeholder="NAME" name="uname" value="<?php echo $_GET['uname'];?>"/>
        <input type="text" placeholder="EMAIL" name="uemail" value="<?php echo $_GET['uemail'];?>"/>
        <input type="phone" placeholder="PHONE" name="uphone" value="<?php echo $_GET['uphone'];?>"/>
        <input type="text" placeholder="ADDRESS" name="uaddress" value="<?php echo $_GET['uaddress'];?>"/>
        <input type="date" name="ucheck_in" value="<?php echo $_GET['ucheck_in'];?>"/>
        <input type="date" name="ucheck_out" value="<?php echo $_GET['ucheck_out'];?>"/>
        <button type = "submit" name="btnIn" value="SUBMIT">SUBMIT</button>
    </form>
    <?php
    
if(isset($_POST['btnIn']))
{
    $room_id = $_POST['uroom_id'];
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['uphone'];
    $address = $_POST['uaddress'];
    $check_in = $_POST['ucheck_in'];
    $check_out = $_POST['ucheck_out'];
    $query = "UPDATE reservation SET name='$name',email='$email',phone='$phone',address='$address',check_in='$check_in',check_out='$check_out' WHERE room_id='".$room_id."'";   
    mysqli_query($con,$query);
    if($query)
    {
        echo "Succesfully Updated!";
    }
}
    ?>
</body>