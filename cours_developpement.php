<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours de Développement - CFA Insti</title>
    <style>
        /*
        * 1. STYLES GÉNÉRAUX ET RESET
        */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0; /* Un fond gris léger pour le corps */
        }

        /* Le conteneur principal simule la bordure rouge du tableau */
        .container {
            width: 100%;
            max-width: 1200px; /* Limite la largeur max de la "page" */
            margin: 0 auto;
            background-color: white;
            border: 2px solid #cc0000; /* Bordure rouge */
            min-height: 80vh; /* Hauteur minimale pour que le footer soit en bas */
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /*
        * 2. HEADER (Haut de page)
        */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid #cc0000; /* Ligne de séparation sous le header */
        }

        .header-left, .header-right {
            display: flex;
            align-items: center;
            font-size: 1.1em;
            font-weight: bold;
        }

        .header-title {
            text-align: center;
            flex-grow: 1; /* Permet au titre de prendre l'espace central */
            color: #cc0000;
            font-size: 1.5em;
        }

        .logo {
            font-style: italic;
            margin-right: 15px;
            color: #333;
        }

        /*
        * 3. CONTENU PRINCIPAL
        */
        .main-content {
            display: flex;
            flex-grow: 1; /* Le contenu prend l'espace restant */
        }

        /* Section du Menu (à gauche) */
        .menu {
            width: 300px; /* Largeur fixe pour le menu */
            padding: 20px;
            border-right: 1px solid #cc0000; /* Séparation verticale */
        }

        .menu h3 {
            margin-top: 0;
            border-bottom: 2px solid #cc0000;
            padding-bottom: 5px;
            color: #333;
        }

        .menu-item {
            margin-bottom: 15px;
        }

        /* Styles pour les boutons/liens de menu */
        .menu-item button {
            background-color: #f7f7f7;
            color: #cc0000;
            border: 1px solid #cc0000;
            padding: 8px 15px;
            text-align: left;
            width: 100%;
            cursor: pointer;
            font-weight: bold;
            font-size: 0.95em;
            transition: background-color 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-item button:hover {
            background-color: #ffe0e0;
        }

        /* Liste des exercices */
        .sub-menu {
            list-style: none;
            padding-left: 10px;
            margin-top: 5px;
        }

        .sub-menu li {
            padding: 3px 0;
            font-size: 0.9em;
            color: #555;
        }

        .sub-menu li a {
            text-decoration: none;
            color: #007bff;
        }

        .sub-menu li a:hover {
            text-decoration: underline;
        }

        /* Section de l'Exercice (à droite) */
        .exercice-zone {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .exercice-zone h3 {
            margin-top: 0;
            color: #cc0000;
        }

        /* La grande boîte d'exercice */
        .exo-box {
            border: 2px solid #cc0000;
            flex-grow: 1; /* Prend l'espace restant dans la zone d'exercice */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2em;
            color: #777;
        }

        /*
        * 4. FOOTER (Pied de page)
        */
        .footer {
            padding: 10px 20px;
            text-align: center;
            border-top: 1px solid #cc0000; /* Ligne de séparation au-dessus du footer */
            background-color: #f7f7f7;
            font-size: 0.85em;
            color: #555;
            margin-top: auto; /* Pousse le footer vers le bas */
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="header">
            <div class="header-left">
                <span class="logo">CFA Insti.</span>
                <span>Logo.</span>
            </div>
            <div class="header-title">Cours de développement</div>
            <div class="header-right">
                Nom prénom.
            </div>
        </header>

        <main class="main-content">
            <nav class="menu">
                <h3>Menu</h3>

                <div class="menu-item">
                    <button>1. Alternatives (Si/Sinon)</button>
                    <ul class="sub-menu">
                        <li><a href="#">Ex1</a></li>
                        <li><a href="#">Ex2</a></li>
                        <li><a href="#">Ex3</a></li>
                    </ul>
                </div>

                <div class="menu-item">
                    <button>2. Boucles (Répétitions)</button>
                    <ul class="sub-menu">
                        <li><a href="#">Ex1</a></li>
                        <li><a href="#">Ex2</a></li>
                        <li><a href="#">Ex3</a></li>
                    </ul>
                </div>
            </nav>

            <section class="exercice-zone">
                <h3>Exo 1.</h3>
                <div class="exo-box">
                    Zone pour l'énoncé de l'exercice ou le rendu.
                </div>
            </section>
        </main>

        <footer class="footer">
            &copy; copyright - CFA insti. - 2025
        </footer>
    </div>

</body>
</html>