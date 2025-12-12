<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoriel</title>
</head>
<body>
    <h1>Factoriel</h1>
    <p>écrire un script php qui permet d'afficher le factoriel d'un nombre entier.</p>
    <form method="post">
        Donner un nombre entier : <br>
        <input type="text" name="nb" ><br><br>
        <input type="submit" name ="valider" value="Envoyer">
    </form>
    <?php
    if (isset($_POST['valider'])) {
        $nb = $_POST['nb'];
        $factoriel = 1;

        for ($i = 1; $i <= $nb; $i++) {
            $factoriel = $factoriel * $i;
        }
        printf("Le factoriel de %d est %d.\n", $nb, $factoriel);
    }
    ?>
    

</body>
</html>