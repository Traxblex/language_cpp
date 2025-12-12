<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair Impair</title>
</head>
<body>
    <center>
    <h1>Pair Impair</h1>

    <form method="post">
        Nombre Entier: <br>
        <input type="text" name="nb"> <br>
        <input type="submit" name="valider" value="Valider">
    </form>

    <?php
    if (isset($_POST['valider'])) {
        $nb = $_POST['nb'];

        if ($nb % 2 == 0){
        printf("Votre nombre est pair");
            }else{
                printf(" Votre nombre est impair");
            }
    }
    ?>
     </center>
</body>
</html>