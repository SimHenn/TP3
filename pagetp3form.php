<form action="tp3affiche.php" mathod="get">
<select name="Jour">
    <?php for ($i = 1; $i < 32; $i++) {
        echo '<option value='.$i.'>' . $i . '</option>';
    }
    ?>
    
<input type="submit"></input>
</select>
</form>