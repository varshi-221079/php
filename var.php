<?php
echo "<pre>";
  //string
  $name1="varshi";
  $name2='varshitha';
  echo $name1."\n";
  echo "my name is $name1"."\n";
  echo "$name1"."\n";
  echo '$name1'."\n";
  //string functions
  $str="hi,hello world,whatsapp";
  echo "$str length is".strlen("$str")."\n";
  echo "reverse of string $str is".strrev("$str")."\n";
  echo "no of words in string $str".str_word_count("$str")."\n";
  echo "position of word world is".strpos("$str","world")."\n";
  echo "replacing world with my name".str_replace("world","varshi","$str")."\n";
  echo trim(" hello,world ")."\n";
  echo strtoupper($str)."\n";
  echo strtolower($str)."\n";
  echo ucfirst($str)."\n";
  echo ucword($str)."\n";
  echo substr($str,0,5)."\n";
  echo strcmpcase($name1,$name2);
  echo "</pre>";
?>
