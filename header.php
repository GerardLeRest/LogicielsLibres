<?php
    $titrePage = "Un logiciel libre est forcément open source. L'inverse n'est pas forcément vrai!";
    require('constantes.php');
?>
    
<header class="container">
    <nav class="navbar sticky-top navbar-expand-lg navbar navbar-light bg-light">
        <!-- Logo de la barre de naviguation -->
        <a class="navbar-brand" href="https://fr.wikipedia.org/wiki/Logiciel_libre"><img src="images/GNU-100.png"
        width="100" height="100" alt="Image de GNU">
        </a>
        <!--menu-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-3">
                    <a class="nav-link" <?php echo $liensFront[0]; ?> > <?php echo $titresFront[0]; ?></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" <?php echo $liensFront[1]; ?> > <?php echo $titresFront[1]; ?></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" <?php echo $liensFront[2]; ?> > <?php echo $titresFront[2]; ?></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" <?php echo $liensFront[3]; ?> > <?php echo $titresFront[3]; ?></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" <?php echo $liensFront[4]; ?> > <?php echo $titresFront[4]; ?></a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="row justify-content-center align-self-center">
            <div class="col-8 border-bottom">
                <!--Titre principal du site-->
                <h2 class="text-center violet py-3"><?php echo "$titrePage";?></h2>
            </div>
        </div>
</header>
