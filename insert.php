
<?php
require_once("condb.php");

if(isset($_GET["delid"]))
{
    $delid=$_GET["delid"];
    mysqli_query($con,"delete from reservation where room_id='".$delid."'");
}

?>
<html>
    <head>
        <title>Room Reserved</title>
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
                margin-top: 50px;
                margin-left: 8px;
                width: 90%;
                height: 20%;
                
            }
            table, th, td
            {

                border: 5px solid chocolate;
                border-collapse: collapse;
                opacity: 0.95;
            }
            th,td
            {
                padding: 5px;
                    text-align: center;
            }
            th
            {
                background-color: chocolate;
                color: white;
            }

    
            .icon-bar 
            {
                margin-top: 50px;
                margin-left: 8px;
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
</html>
<?php
require_once("condb.php");
$sqlShow = "SELECT * FROM reservation ORDER BY room_id ASC";
$qryShow = mysqli_query($con,$sqlShow);
$numShow = mysqli_num_rows($qryShow);
if($numShow>0)
{
?>
<table style="float:left">
    <tr>
        <th>ROOM ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>
        <th>CHECK IN DATE</th>
        <th>CHECK OUT DATE</th>
    </tr>
<?php
    while($recShow = mysqli_fetch_object($qryShow))
    {
?>
    <tr style="background:white;">
        <td><?php echo $recShow->room_id;?></td>
        <td><?php echo $recShow->name;?></td>
        <td><?php echo $recShow->email;?></td>
        <td><?php echo $recShow->phone;?></td>
        <td><?php echo $recShow->address;?></td>
        <td><?php echo $recShow->check_in;?></td>
        <td><?php echo $recShow->check_out;?></td>
        
    </tr>

<?php
    }
?>
</table>
<?php
}
else
{
    echo "No Date Found";
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Group Input Form</title>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <div class="box">
            <form action="find.php" method="post">
                <input type="text" name="srch" placeholder="Type..." />
                <input type="submit" name="btnIn" value="Search" />
            </form>

        </div>
    </body>

</html>

