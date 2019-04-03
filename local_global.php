<?php
 $x = 4;
   
 function assignx () { 
  $x = 0;
  print "\$x inside function is $x. <br />";
   
   
   assignx();
   }
   echo assignx();
?>