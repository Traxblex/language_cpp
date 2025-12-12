<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equation 2</title>
</head>
<body>
    <center>
        <h1>Résolution de l'équation ax² + bx + c = 0</h1>
        <form method="post">
           Premieier coef : <br>
            <input type="text" name="a"> <br>
              Deuxieme coef : <br>
            <input type="text" name="b"> <br>
            Troisime coef : <br>
            <input type="text" name="c"> <br>
            <input type="submit" name="valider" value="Résoudre">
        </form>
        <?php
            if (isset($_POST['valider'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];

            if ($a == 0) {
                if ($b == 0) {
                    if ($c == 0) {
                    printf("Ens. des solutions est R");}

                else {
                    printf("Ens. des solution est vide");}
            }else {
                $x = -$c / $b;
                printf("La solution de l'équation est x = " . $x);
            }
        }
            else {
                $d = $b * $b - 4 * $a * $c;
                if ($d < 0) {
                    printf("Pas de solution réelle");
                } elseif ($d == 0) {
                    $x = -$b / (2 * $a);
                    printf("Une solution réelle x = " . $x);
                } else {
                    //sqrt = racine carrée
                    $x1 = (-$b - sqrt($d)) / (2 * $a);
                    $x2 = (-$b + sqrt($d)) / (2 * $a);
                    //%f = float
                    printf("<br>Solution 1: x1 = " . $x1);
                    printf("<br>Solution 2: x2 = " . $x2);

                }
        }
    }
    ?>
    </center>
</body>
</html>