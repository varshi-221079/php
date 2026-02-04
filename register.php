<?php
include 'db.php';

$username=$_POST['username'];   //retrive username from html file
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(username,email,password)
VALUES('$username','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "Registration successful";
}else{
    echo "Error";
}
?>
