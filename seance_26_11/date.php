<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE</title>
</head>
<body>
    <center>
        <h1>Excercide validité d'une date</h1>
        <form method="post">
           Jour : <br>
            <input type="text" name="jour"> <br>
              Mois : <br>
            <input type="text" name="mois"> <br>
            Année : <br>
            <input type="text" name="annee"> <br>
            <input type="submit" name="valider" value="Vérifier">
        </form>
        <?php
            if (isset($_POST['valider'])) {
                $jour = $_POST['jour'];
                $mois = $_POST['mois'];
                $annee = $_POST['annee'];

            if ($jour < 1 || $jour > 31 || $mois < 1 || $mois > 12 || $annee < 1900){
                printf("la date saisie est invalide");
            }else{
                switch ($mois) {
                    case 4: case 6: case 9: case 11:
                        if ($jour > 30){
                            printf("la date saisie est invalide");
                        }else{
                            printf("la date saisie est valide");
                        }
                        break;
                    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                        printf("la date saisie est valide");
                    	break;
                    case 2:
                        if ((($annee % 4 == 0) && ($annee % 100 != 0)) || ($annee % 400 == 0)){
                            $nbfevrier = 29;
                        }else{
                            $nbfevrier = 28;
                        }
                        if ($jour > $nbfevrier){
                            printf("la date saisie est invalide");
                        }else{
                            printf("la date saisie est valide");
                        }
                        break;
                }
            }
        }
        ?>
    </center>
</body>
</html>