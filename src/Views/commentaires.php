<!doctype html>
<html lang="fr">
    <?php require_once('head.php'); ?>
    
    <body class="d-flex flex-column min-vh-100">
        <?php require_once('header.php'); ?>
        <main  class="container flex-grow-1">
            <br>
            <br>
            <br>
            <row>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Pseudonyme</th>
                            <th scope="col">Commentaire</th>
                        </tr>
                    </thead>
                    <tbody> <!--corps du tabelau-->
                    <?php for ($i = 0; $i < count($tableau); $i++): ?> <!-- on n'affiche pas l'email -->
                        <tr>
                            <th scope="row"><?= $i + 1 ?></th>
                            <td><?= isset($tableau[$i]['pseudonyme']) ? htmlspecialchars($tableau[$i]['pseudonyme']) : '' ?></td>
                            <td><?= isset($tableau[$i]['texte']) ? htmlspecialchars($tableau[$i]['texte']) : '' ?></td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table> 
            </row>
        </main>
         <!-- bas de page-->
        <?php require_once('footer.php');?> 
        <!--fichier Boostrap JS"-->
        <script src="public/assets/js/bootstrap.bundle.min.js"></script> 
    </body>
</html> 

