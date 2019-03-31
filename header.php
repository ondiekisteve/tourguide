<!DOCTYPE html>
<html>
<head>
    <title>Tour Guide Management System</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="jquery-ui.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('img/beach33.jpg');background-size: cover;">
<div class="container" style="margin-top: 10px;">
<div class="well well-sm" style="background-color: teal;color: white;padding: 0px;">
    <div class="navbar" style="padding: 0px;margin: 0px;">
        <h4 style="text-align: center;margin: 0px;" class="navbar-brand"><a href="index.php">SMART ONLINE TOURGUIDE</a> </h4>
        <ul CLASS="nav navbar-nav pull-right">
            <li><a href="index.php">HOME</a> </li>
            <li><a href="aboutus.php">ABOUT US</a> </li>
            <li><a href="signup.php">SIGNUP</a> </li>
            <li><a href="contactus.php">CONTACT US</a> </li>
            <?php

            if(isset($_SESSION['userId']))
            {
               echo "<li><a href='logout.php'>LOGOUT</a> </li>";

            }
            else{
                echo "<li><a href='login.php'>LOGIN</a> </li>";
            }
            ?>
        </ul>
    </div><!--End of navbar-->
</div><!--End of well-->


