<!doctype html>
<html lang="fr">

    <!-- head -->
    <?php require_once('head.php') ?>

    <body> 
        <?php require_once('header.php'); ?>
        <main class=""container>
            <div class="container">
                <!--formulaire-->
                <br />
                <form action="">
                    <div class="row justify-content-center">
                        <div class="col-8 mb-3">
                            <label for="votreNom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="votreNom" placeholder="Votre nom (obligatoire)"
                                required>
                        </div>
                        <div class="col-8 mb-3">
                            <label for="votrePrenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="votrePrenom"
                                placeholder="Votre prénom (obligatoire)" required>
                        </div>
                        <div class="col-8 mb-3">
                            <label for="votreEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="votreEmail"
                                placeholder="Votre adresse email (obligatoire)" required>
                        </div>
                        <div class="col-8 mb-3">
                            <label for="message" class="form-label">Votre message</label>
                            <textarea class="form-control" id="message" rows="4"
                                placeholder="Votre message (facultatif)"></textarea>
                        </div>
                        <div class="col-8 mb-3">
                            <button class="btn btn-success" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!--fichier Boostrap JS"-->
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
            