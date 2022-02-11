<?php include 'exo6.php';
function listePseudo($personnes, $pseudo)
{
    echo "<table border=1><tr><th>Prénom</th><th>Nom</th><th>Age</th><th>Ville</th></tr>";
    foreach ($personnes as $id => $valeur) {
        if ($personnes[$id] == $personnes[$pseudo]) {
            echo "<tr><td>" . $personnes[$id]["prenom"] . "</td><td>" . $personnes[$id]["nom"] . "</td><td>" . $personnes[$id]["age"] . "</td><td>" . $personnes[$id]["ville"] . "</td></tr>";
        }
    };
    echo "</table>";
} ?>
<form method="post">
    <p>Votre pseudo : <input type="text" name="pseudo" /></p>
    <p><input type="submit" value="OK" name=bouton></p>
    
    <?php if(isset($_POST["bouton"])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    if (isset($personnes[$pseudo])) {
        listePseudo($personnes, $pseudo);
    } else echo "Désolé, ce pseudo n'existe pas";;} ?>
</form>