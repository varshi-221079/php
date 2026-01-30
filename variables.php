<?php
  $x=10;
  function test()
  {
    $y=20;
    global $x;
    echo " local varible y=$y"
    echo "global variable x=$x"
  }
  test()
 ?>
