<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
<center>
    <h1>Diviseurs</h1>
    <p>Ecrire un script PHP qui permet d'afficher les diviseurs d'un nombre entier.</p>

    <form method="post" action="">
        Entrez un nombre entier : <br>
        <input type="text" id="number" name="nb" required>
        <input type="submit" name="Valider" value="Valider">">
    </form>
    <?php
        if (isset ($_POST['Valider'])) {
            $nb = $_POST['nb'];
            for ($div = 1 ; $div <= $nb ; $div++) {
        if ($nb % $div == 0) {
            printf ("\n diviseur : %d", $div);
        }
    }
        }
    ?>
</center>
</body>
</html>
