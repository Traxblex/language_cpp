<?php
    // Tu inclus ton header.php
    include('commun/header.php');
?>

    
        <nav class="col-md-3 p-3 menu-col">
            <h4 class="menu-title">Menu</h4>

            <div class="mb-3">
                <button class="btn menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAlternatives" aria-expanded="false" aria-controls="collapseAlternatives">
                    1. Alternatives (Si/Sinon)
                </button>
                <div class="collapse show" id="collapseAlternatives">
                    <ul class="list-unstyled ps-3 small text-secondary">
                        <li><a href="seance_26_11/equation_1.cpp" target="exercice-frame" class="text-decoration-none text-primary">Ex1 :equation_1.cpp</a></li>
                        <li><a href="seance_26_11/equation_2.php" target="exercice-frame" class="text-decoration-none text-primary">Ex2 : equation_1.cpp</a></li>
                        <li><a href="#" target="exercice-frame" class="text-decoration-none text-primary">Ex3 : Date</a></li>
                    </ul>
                </div>
            </div>

            <div class="mb-3">
                <div class="collapse show" id="collapseBoucles">
                    <ul class="list-unstyled ps-3 small text-secondary">
                        <li><a href="vendredi12dec/multiplication.php" target="exercice-frame" class="text-decoration-none text-primary">Ex1 : Table de Multi.</a></li>
                        <li><a href="vendredi12dec/diviseur.php" target="exercice-frame" class="text-decoration-none text-primary">Ex2 : Diviseurs</a></li>
                        <li><a href="vendredi12dec/parfait.php" target="exercice-frame" class="text-decoration-none text-primary">Ex3 : Nombre Parfait</a></li>
                    </ul>
                </div>
            </div>
            
        </nav>

        <section class="col-md-9 p-3 d-flex flex-column">
            <h4 class="text-danger fw-bold text-start">Résultat de l'Exercice</h4>
            <iframe 
                name="exercice-frame" 
                id="exercice-frame" 
                src="" 
                class="exercice-box" 
                style="width: 100%; border: 2px solid #cc0000; flex-grow: 1;" 
                title="Zone d'affichage des exercices">
                Sélectionnez un exercice à gauche pour afficher le résultat ici.
            </iframe>
        </section>

<?php
    // Tu inclus ton footer.php
    include('commun/footer.php');
?>