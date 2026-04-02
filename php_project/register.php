<?php
include 'db.php';
//clean,validate,format the input
$username=$_POST['username'];   //retrive username from html file
$email=$_POST['email'];
$password=$_POST['password'];
$username=htmlspecialchars(stripslashes(trim($username)));
$email    = htmlspecialchars(stripslashes(trim($email)));
$password =htmlspecialchars(stripslashes(trim($password)));
if(strlen($username<3))
{
   die("username mustbe atleast 4 charactres");
}
if(strlen($username<3))
{
   die("username mustbe atleast 4 charactres");
}
if (!preg_match('/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[@$!%*?&]).+$/', $password)) {
    die("Password must contain letters, numbers, and special characters");
}
strtolower($username)
$sql="INSERT INTO users(username,email,password)
VALUES('$username','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "Registration successful";
}else{
    echo "Error";
}
?>
