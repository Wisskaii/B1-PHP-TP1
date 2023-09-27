<?php
    
    echo "\nTraversée Quiberon-Le Palais du 3 juillet 2021 \n\n" ;
    echo "\n- Calcul du tarif pour les groupes -\n\n" ;
    echo "Saisir le nombre d'adultes : " ;

    $usagers = fgets(STDIN) ;
    
    $tarifRéduit = $usagers / 7 ;
    $tarifRéduit = intval($tarifRéduit) * 7 ;

    $pleinTarif = $usagers - $tarifRéduit ;
    $prixPleinTarif = $pleinTarif * 18 ;

    $prixTarifRéduit = $tarifRéduit * 15 ;
    $prixFinal = $prixTarifRéduit + $prixPleinTarif ;

    echo "Vous devrez payer : " , $prixFinal , " €\n\n" ;

?>
