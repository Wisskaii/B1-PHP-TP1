<?php


     echo "Traversée Quiberon-Le Palais du 3 juillet 2021 \n\n" ;
     echo "Combien d'adultes êtes-vous ? : " ;
     
     define( "PRIX_BILLET" , 17 ) ;
     $passagers = fgets( STDIN ) ;
     
     $prix = PRIX_BILLET * $passagers ;
         
     echo "Vous devrez donc payer : ", $prix , " €\n"
     
?>
