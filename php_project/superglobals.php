<?php
//$GLOBALS
$GLOBALS['a']=10;
function test()
{
 echo $GLOBALS['a'];
 $GLOBALS['b']=10;
  echo $GLOBALS['b'];
}
 test()
 echo $GLOBALS['b'];
?>
