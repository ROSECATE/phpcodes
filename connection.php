<?php
$host ="localhost";

$username ="root";
$password="";
$database ="TIC_STUDENTS";

// Creating connection
$con=mysqli_connect($host,$username,$password,$database);

//Checking Connection
 if($con)
 {
   // echo "Connection to database successful";
 }
 else{
    echo "connection failed" .mysqli_connect_error().
    "<a href='home.php'> check your connection</a>"; 
 }
 ?>