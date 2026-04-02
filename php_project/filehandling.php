<?php
//file operation
$fp=fopen("data.txt","r");
$res=fread($fp,filesize("data.txt"));
fclose($fp);
echo $res;
//to list the files in a folder
?>
