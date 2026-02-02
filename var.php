<?php
  //datatypes
  echo "<pre>";
  //boolean
  $a=10;
  if ($a)
  {
    echo "$a considered as true"."\n";
  }
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
  echo "</pre>";
?>
