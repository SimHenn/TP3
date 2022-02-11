<?php $personnes = array(
    "mdupond" => array("prenom" => "Martin", "nom" => "Dupond", "age" => 25, "ville" => "Paris"),
    "jm" => array("prenom" => "Jean", "nom" => "Martin", "age" => 20, "ville" => "Villetaneuse"),
    "toto" => array("prenom" => "Tom", "nom" => "Tonge", "age" => 18, "ville" => "Epinay"),
    "arn" => array("prenom" => "Arnaud", "nom" => "Dupond", "age" => 33, "ville" => "Paris"),
    "email" => array("prenom" => "Emilie", "nom" => "Ailta", "age" => 46, "ville" => "Villetaneuse"),
    "dask" => array("prenom" => "Damien", "nom" => "Askier", "age" => 7, "ville" => "Villetaneuse")
);
echo "<table border=1><tr><th>Prénom</th><th>Nom</th><th>Age</th><th>Ville</th></tr>";
foreach ($personnes as $id => $valeur) {
    echo "<tr><td>" . $personnes[$id]["prenom"] . "</td><td>" . $personnes[$id]["nom"] . "</td><td>" . $personnes[$id]["age"] . "</td><td>" . $personnes[$id]["ville"] . "</td></tr>";
};
echo "</table>";
$villes = "Paris";

function listePersonnes($personnes, $ville)
{
    echo "<table border=1><tr><th>Prénom</th><th>Nom</th><th>Age</th><th>Ville</th></tr>";
    foreach ($personnes as $id => $valeur) {
        if ($personnes[$id]['ville'] == $ville) {
            echo "<tr><td>" . $personnes[$id]["prenom"] . "</td><td>" . $personnes[$id]["nom"] . "</td><td>" . $personnes[$id]["age"] . "</td><td>" . $personnes[$id]["ville"] . "</td></tr>";
        }
    };
    echo "</table>";
}
listePersonnes($personnes, $villes);
