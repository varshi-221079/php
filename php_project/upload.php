//this is upload.php<?php
$fname=$_FILES['name'];
print_r($fname);
$templocation=$_FILES['name']['tmp_name'];
$f=$_FILES['name']['name'];
$dlocation="..uploads/." $fname;
if(move_uploaded_file($templocation,$dlocation))
{
    echo "file uploaded successfully";
}
else
{
    echo "file is not uploaded";
}
?>
