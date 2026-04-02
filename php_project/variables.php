<?php
  echo "<pre>";
  //boolean variable
  $a=true;
  if ($a)
  {
     echo "print $a is boolean true";
  }
  //integer
  $bin_var=0b1010;
  echo "print $bin_var"."\n";
  $dec_var=1010;
  echo "print $dec_var"."\n";
  $oct_var=012;
  echo "print $oct_var"."\n";
  $hexa_var=0xA;
  echo "print $hexa_var"."\n";
  $num1=35.6;
  echo "print $num1"."\n";

  $x=10;
  function test()
  {
    $y=20;
    global $x;
    echo " localvarible y=$y"."\n";
    echo "globalvariable x=$x"."\n";
    static $z=0;
    $z++;
    echo "static variable z=$z"."\n";

  }
  test();
  test();
  $names=array("varshi","reshu","joshi");
  echo "my array is $names"."\n";
  print_r($names)."\n";
  var_dump($names);
  echo "$names";
  echo "</pre>";
 ?>
