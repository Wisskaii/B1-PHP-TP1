<?php

     echo "\nSaisir la température en C : \n" ;
     
     $celcius = fgets ( STDIN ) ;

     $fahrenheit = 1.8 * $celcius + 32 ;
     
     echo "Température en F : " , $fahrenheit , "\n\n" ;
     
?>
