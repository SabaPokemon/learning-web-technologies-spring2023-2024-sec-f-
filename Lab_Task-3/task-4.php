<?php

   $number_one= 45;
   $number_two= 34;
   $number_three= 21;

   if($number_one>$number_two && $number_one>$number_three)
   {
        echo "The largest number is= ".$number_one;
   }elseif($number_two>$number_one &&  $number_two>$number_three )
   {
    echo "The largest number is= ".$number_two;
   }else
   {
    echo "The largest number is= ".$number_three;
   }
    

?>
