<?php
include  'db.php';
$idno=$_GET['idno'];
$name=$_GET['username'];
$bloodgroup=$_GET['bloodgroup'];
$sql="insert into bloodgroup(idno,name,bloodgroup)values('$idno','$name','$bloodgroup')";
echo "WELCOME $name ,your blood group is $bloodgroup";
?>
