<?php
include_once 'dbh.inc.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['user'];
$password = $_POST['pass'];
$type = $_POST['type'];

$sql= "INSERT INTO users (name , email ,username , password , type) 
Values ('$name ','$email','$username','$password', '$type');";
mysqli_query($conn,$sql);


header("Location:  ../signupForm.php?signup=success");