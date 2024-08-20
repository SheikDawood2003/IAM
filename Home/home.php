<?php

session_start();
$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC College</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="menu_bar">
        <h1 class="logo">ABC College of <span>Engineering</span></h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
            <div class="dropdown">
                <ul>
                    <li><a href="#">View Attendance</a></li>
                    <li><a href="#">Add Attendance</a></li>
                    <li><a href="./../iam.php">IAM System</a></li>
                </ul>
            </div>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="./../logout.php">Log Out</a></li>
        </ul>
    </div>
    <div class="dashboard">
        <div class="card-container">
            <div class="card">
                <a href="./../AGRIDept/agri.php">Agriculture <br> Engineering</a>
            </div>
            <div class="card">
                <a href="./../AIDSDept/aids.php">Artificial Intelligence <br> and<br> Data Science</a>
            </div>
            <div class="card">
                <a href="civil.php">Civil <br> Engineering</a>
            </div>
            <div class="card">
                <a href="cse.php">Computer Science <br> Engineering</a>
            </div>
            <div class="card">
                <a href="ece.php">Electronics and <br> Communication Engineering</a>
            </div>
            <div class="card">
                <a href="eee.php">Electrical and <br> Electronics Engineering</a>
            </div>
            <div class="card">
                <a href="it.php">Information <br> Technology</a>
            </div>
            <div class="card">
                <a href="mech.php">Mechanical <br> Engineering</a>
            </div>
        </div>
    </div>
</body>
</html>
