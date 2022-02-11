<?php 
    $_nb1 = $_GET['nb1'];
    $_nb2 = $_GET['nb2'];
    $_nb3 = $_GET['nb3'];
?>

<h1>Résultat du test :</h1>
<?php 
    echo $_nb1 . " est-il compris entre " . $_nb2. " et ". $_nb3. " ? " ."<br>";

    if ($_nb1 >= $_nb2 && $_nb1 <= $_nb3){
        echo "oui, ". $_nb1. " est compris entre ". $_nb2. " et ". $_nb3.".";
    }
    else{
        echo "non, ". $_nb1. " n'est pas compris entre ". $_nb2. " et ". $_nb3.".";
    }

    ?>