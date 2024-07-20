<!doctype html>
<html lang="fr">

    <?php require_once('head.php'); ?>
   
    <body class="d-flex flex-column  min-vh-100">

        <?php require_once('header.php'); ?>

        <main class="container flex-grow-1">

            <form action="/formulaire" method="post">
                
                <!--pseudonyme-->
                <div class="row justify-content-center">    
                    <div class="form-group col-lg-5 col-md-8 mb-4 col-sm-12 mt-5">
                        <label for="formGroupExampleInput">pseudonyme</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="pseudonyme" placeholder="pseudonyme">
                    </div>
                </div>

                <!-- adresse email -->
                <div class="row justify-content-center">    
                    <div class="form-group col-lg-5 col-md-8 col-sm-12 mb-4 ">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="prenom.nom@exemple.fr">
                    </div>
                </div>
                
                <!-- zone de texte -->
                <div class="form-group col-12 mb-3">
                    <label for="exampleFormControlTextarea1">Et pour vous, quel est votre logiciel libre "coup de coeur", et pourquoi?</label>
                    <textarea class="form-control" name="texte" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>


                <!-- bouton de validation-->
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn bouton-perso">Valider</button>
                    </div>
                </div>

            </form>  

            <div class = "row">
                <!-- affichage des erreurs -->
                <?php
                    if (isset($erreurs) && count($erreurs) > 0) {
                        foreach ($erreurs as $valeur) {
                            // htmlspecialchars: échappement des caractères - < est converti en son équivalent HTML &lt;
                            echo htmlspecialchars($valeur) . '<br>';
                        }
                    }
                ?>
            </div>
        </main>
        <!-- bas de page-->
        <?php require_once('footer.php');?> 
        <!--fichier Boostrap JS"-->
        <script src="assets/js/bootstrap.bundle.min.js"></script> 
    </body>
</html>
