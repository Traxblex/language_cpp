<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equation 1</title>
</head>
<body>
    <center>
        <h1>Résolution de l'équation ax + b = 0</h1>
        <form method="post">
            Valeur de a: <br>
            <input type="text" name="a"> <br>
            Valeur de b: <br>
            <input type="text" name="b"> <br>
            <input type="submit" name="valider" value="Résoudre">
        </form>
        <?php
            if (isset($_POST['valider'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];

            if ($a == 0) {
                if ($b == 0) {
                    printf("Ens. des solutions est R");}

                else {
                    printf("Ens. des solution est vide");}
            }else {
                $x = -$b / $a;
                printf("La solution de l'équation est x = " . $x);}
        }
        ?>
    </center>
</body>
</html>