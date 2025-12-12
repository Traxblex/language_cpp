<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parfait</title>
</head>
<body>
    <h1>Nombres Parfaits</h1>
    <p>ecrire un script php qui permet d'afficher la liste des nombres parfaits entre deux bornes.</p>
    <form method="post">
        Donner la premère borne : <br>
        <input type="text" name="B1" ><br>
        Donner la deuxième borne : <br>
        <input type="text" name="B2" ><br><br>
        <input type="submit" name ="valider" value="Envoyer">
    </form>
    <?php
    if (isset($_POST['valider'])) {
        $B1 = $_POST['B1'];
        $B2 = $_POST['B2'];
        $cpt = 0;

    for ($nb = $B1; $nb <= $B2; $nb++) {
        $somme = 0;
        for ($div = 1; $div < $nb; $div++) {
            if ($nb % $div == 0) {
                $somme = $somme + $div;
            }
        }
        if ($somme == $nb) {
            printf("%d est un nombre parfait.\n", $nb);
            $cpt++;
        }
        }
        printf("Il y a %d nombres parfaits.\n", $cpt);
    }
    ?>
        

</body>
</html>