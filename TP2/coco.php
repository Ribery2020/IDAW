<!DOCTYPE html>
<html>
<head>
<title> Exemple Dynamique </title>
</head>
<body>
La date d'aujourd'hui est le :
<?php
// Affichage de la date
echo date("d/m/Y");
echo "<br>";


function afficher( $texte, $saut = 1 ) {
    echo $texte;
    for( $i = 0 ; $i < $saut ; $i++)
    echo "\n";
    }
    afficher("Hello", 0);
    afficher(" World !");


    $tab = array(17,-3);
    // affiche récursivement le tableau
    echo "tab : "; print_r($tab);
    // supression de la clef 0
    unset($tab[0]);
    echo "tab : "; print_r($tab);
    // copie d'un tableau
    $tab2 = array_values($tab);
    echo "tab2 : "; print_r($tab2);
    echo "<br>";
    function fun($tab){
        for($i =0; $i<count($tab);$i++){
            echo $tab[$i]."\n";
        }
        echo "nb min = ".min($tab)."\n";
        echo "nb max = ".max($tab)."\n";

    }
    $fun = array(2,3,4,5,54,3,4,23,446,89);
    fun($fun);

?>
</body>
</html>