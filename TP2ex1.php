<form method="get">
    <p>Prénom : <input type="text" name="prenom" /></p>
    <p>Nom : <input type="text" name="nom" /></p>
    <p>Adresse : <input type="text" name="adresse" /></p>
    <p>Ville : <input type="text" name="ville" /></p>
    <p>Code Postal : <input type="text" name="cp" /></p>
    <p><input type="submit" value="OK" name=bouton></p>
</form>
<?php if (isset($_GET["bouton"])) {
    $prenom = htmlspecialchars($_GET['prenom']);
    $nom = htmlspecialchars($_GET['nom']);
    $adresse = htmlspecialchars($_GET['adresse']);
    $ville = htmlspecialchars($_GET['ville']);
    $cp = htmlspecialchars($_GET['cp']);
    echo "<p><a href='civil.php?prenom=<?=$prenom?>&nom=<?$nom?>'method='get'>civil</a></p>
        <p><a href='adresse.php?adresse=<?=$adresse?>&ville=<?=$ville?>&cp=<?=$cp?>'method='get'>adresse</a></p>";
};
?>

<?= "Ecrire un nombre" . "<br>" ?>
<form action="resultat.php" method="get">
    <p><input type="number" name="nb1" /></p>
    <?= " est compris entre " ?>
    <p><input type="int" name="nb2" /></p>
    <?= " et " ?>
    <p> <input type="int" name="nb3" /></p>
    <p><input type="submit" value="OK"></p>
</form>



<form method="get">
    <p><input type="number" name="nbL" /></p>
    <p><input type="number" name="nbC" /></p>
    <p><input type="number" name="nbT" /></p>
    <input type="submit" value="OK" name=button>
</form>
<?php if (isset($_GET["button"])) {
    $nblignes = $_GET['nbL'];
    $nbcolonnes = $_GET['nbC'];
    $nbtaille = $_GET['nbT'];

    echo '<table border="' . $nbtaille . '">';
    for ($i = 0; $i < $nblignes; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $nbcolonnes; $j++) {
            echo "<td>" . "Ligne" . $i . "-Cellulle" . $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
};
?>