<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
<center
    <h1>Multiplication Table</h1>
    <p>Ecrire un script PHP qui permet d'afficher la table de multiplication de 1 à 10 d'un nombre entier.</p>

    <form method="post" action="">
        Entrez un nombre entier : <br>
        <input type="text" id="number" name="nb" required>
        <input type="submit" name="Valider" value="Valider">">
    </form>
    <?php
        if (isset ($_POST['Valider'])) {
            $nb = $_POST['nb'];
            for ($m = 1; $m <= 10; $m = $m +1) {
                $resultat = $nb * $m;
                printf("<br> %d * %d = %d", $nb, $m, $resultat);
            }
        }
    ?>
</center>
</body>
</html>
