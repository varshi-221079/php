<?php
$conn=mysqli_connect("localhost","root","","testdb");
if(!$conn)
{
  die("Database connection failed:".mysqli_connect_error());
}
echo "Datebase connected successfully";
?>
