//this is login php<?php
include 'db.php';

$username=$_POST['username'];
$password=$_POST['password'];
$username=strtolower($username);

$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1)  //checks user exits in database
{
  $arr=mysqli_fetch_assoc($result)
  if(strcmp($arr['password']),$password)
  {
    echo "Login Successful";
  }
  else{
    echo "Invalid credentials";
    }
}

if(mysqli_num_rows($result)>0){
    echo "Login Successful";
}else{
    echo "Invalid credentials";
}
?>
