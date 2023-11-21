<!doctype html>
<html lang="fr">

    <?php require_once('head.php') ?>
    
    <body>

        <?php require_once('header.php');
             
        ?>
        <main>
            <div class="container">
                <div class="row">
                    <!--description du logiciel-->
                    <div class="col-12">
                        <br>
                            Joplin est une application gratuite de prise de notes open source qui peut gérer un grand nombre de notes
                            organisées en notebooks. Les notes sont consultables, peuvent être copiées, étiquetées et modifiées soit
                            directement à partir des applications, soit à partir de votre propre éditeur de texte. Elles sont au format MarkDown.
                        </br>
                        <br>
                            Les notes exportées d'Evernote via des fichiers .enex peuvent être importées dans Joplin, y compris le contenu formaté
                            (converti en MarkDown), les ressources (images, pièces jointes, etc.) et les métadonnées complètes (géolocalisation, temps
                            mis à jour, temps créé, etc.), et quelques extras (formules de maths et chimie, diagrammes UML, etc).
                        </br>
                        <br>
                            Les notes peuvent être synchronisées avec divers services de cloud, y compris nextcloud, dropbox, onedrive, webdav ou le
                            système de fichiers (par exemple avec un répertoire réseau).
                        </br>
                            Un Web Clipper, pour enregistrer des pages Web et des captures d'écran de votre navigateur, est disponible pour Firefox et 
                            Chrome. 
                        </br>
                    </div>
                </div>
                <div class ="row align-items-center justify-content-around">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <br />
                        <!--tableau d'information-->
                        <table class="table table-bordered">
                            <thead class="table-secondary">
                                <tr>
                                <th scope="col">Disponible sur</th>
                                <th scope="col">Windows, Mac OS X, GNU/Linux, Android, Apple IOS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Alternative à:</th>
                                <td>Evernote, Onenote</td>
                                </tr>
                                <tr>
                                <th scope="row">Version:</th>
                                <td>Stable</td>
                                </tr>
                                <tr>
                                <th scope="row">Langue:</th>
                                <td>multilingue</td>
                                </tr>
                                <tr>
                                <th scope="row">Créateur(s):</th>
                                <td>Laurent Cozic</td>
                                </tr>
                                <tr>
                                <th scope="row">Licence(s):</th>
                                <td><a href="https://framalibre.org/licences/licence-publique-g%C3%A9n%C3%A9rale-affero-agpl">Licence publique générale Affero</a></td>
                                </tr>
                            </tbody>
                        </table>  
                        <a class="btn bouton-perso" href="https://joplinapp.org/" role="button">lien officiel</a>
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-5 my-3">
                        <!--Carroussel-->
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="images/joplin/joplin1.jpg" class="img-fluid d-block w-100" alt="image1 de Joplin">
                                </div>
                                <div class="carousel-item">
                                <img src="images/joplin/joplin2.png" class="img-fluid d-block w-100" alt="image2 de Joplin">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>   
                    </div>
                </div>
            </div> 
        <main>

        <!--bas de page-->
        <footer >
            <div class = "container border-top py-3 my-3">
                <div class="row justify-content-between">    
                    <div class="col-sm-10 col-md-10 col-lg-10">
                            sources: 
                            <a href="https://framalibre.org/content/joplin">Framalibre - Joplin</a>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <figure class="figure"> <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.fr"> 
                            <img src="images/Cc_by-sa.png" alt="Cc-by-sa.png" class="img-responsive my-1"> 
                            <figcaption class="figure-caption">licence CC-BY-SA 4.0</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!--fichier Boostrap JS"-->
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>       