<?php

$servername="localhost";
$username="root";
$password="";
$db="self&store";

$conn=mysqli_connect($servername,$username,$password,$db);

if($conn){
    echo "Connected to database successfully";
}
else{
    die("Could not connect".mysqli_connect_error());
}

$CustID = $_POST['custID'];
$date = $_POST['date'];
$unit = $_POST['unit'];
$unitID = $_POST['unitID'];



?>