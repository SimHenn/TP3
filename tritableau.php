Début du programme <br>
<?php
$tableau = array(8, 4, 6, 0, 2, 7);

$taille = count($tableau) - 1;
for ($j = 0; $j < $taille; $j++) {
    for ($i = 0; $i < $taille; $i++) {
        if ($tableau[$i] > $tableau[$i + 1]) {
            $x = $tableau[$i + 1];
            $tableau[$i + 1] = $tableau[$i];
            $tableau[$i] = $x;
        }
    }
}
print_r($tableau);
$recherche = 5;
for ($i = 0; $i < count($tableau); $i++) {
    if ($tableau[$i] < $recherche) {
        echo "<br>je suis plus grand que " . $tableau[$i];
    } elseif ($tableau[$i] = $recherche) {
        echo "<br>Je suis à la position " . $i . " du tableau";
        break;
    } else {
        echo "<br>je suis nulle part";
        break;
    }
}

$debut = 0;
$fin = count($tableau);
$milieu = (int)($debut+$fin/2);
function Dichotomique($newtableau, $valeur)
{
    $nb = 0;
    $milieu = count($newtableau)/2;
    if ($newtableau[$milieu]=$valeur) {
        echo "<br>bravo";
    }


    echo "<br>oui".$nb++." ".$milieu;
}
Dichotomique($tableau,$recherche);





?>
<br>Fin du programme