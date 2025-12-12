<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
</head>
<body>
    <a href="cour_prog.php?page=1">Table Multi</a>
    <a href="cour_prog.php?page=2">Diviseurs</a>
    <a href="cour_prog.php?page=3">Factoriel</a>
    <a href="cour_prog.php?page=4">Parfaits</a>
    <hr>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = 1;
    }
    switch($page) {
        case 1: require_once ("multiplication.php");
                break;
        case 2: require_once ("diviseur.php");
                break;
        case 3: require_once ("factoriel.php");
                break;  
        case 4: require_once ("parfait.php");
                break;
    }
    ?>
</body>
</html>