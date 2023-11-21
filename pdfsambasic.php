<!doctype html>
<html lang="fr">

    <?php require_once('head.php') ?>   
    
    <body>
        <?php require_once('header.php'); ?>
        <main>
            <div class="container">
                <div class="row">
                    <!--Description du logiciel-->
                    <div class="col-12">
                        <p>
                            PDFsam Basic est un utilitaire bureautique pour découper et/ou mêler, diviser, fusionner, extraire(extrait)
                        des pages, faire tourner et mélanger des documents PDF.
                        </p>
                        <p>
                            Il est multiplateforme, libre et gratuit en mode Basic.
                        </p>
                </div>
                <div class ="row align-items-center justify-content-around">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <br />
                        <!--Tableau d'information-->
                        <table class="table table-bordered">
                            <thead class="table-secondary">
                                <tr>
                                <th scope="col">Disponible sur</th>
                                <th scope="col">Windows, Mac OS X, GNU/Linux</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Alternative à:</th>
                                <td>PDF-XChange, ABBY PDF, Foxit Reader, Nitro Reader, Adobe Acrobat Pro</td>
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
                                <td>Andrea Vacondio</td>
                                </tr>
                                <tr>
                                <th scope="row">Société ou organisation:</th>
                                <td>Andrea Vacondio</td>
                                </tr>
                                <tr>
                                <th scope="row">Licence(s):</th>
                                <td><a href="https://framalibre.org/licences/licence-publique-g%C3%A9n%C3%A9rale-affero-agpl">Licence publique générale Affero</a></td>
                                </tr>
                            </tbody>
                        </table>  
                        <!--bouton "site keepassXC" -->
                        <a class="btn bouton-perso" href="https://pdfsam.org/fr/" role="button">lien officiel</a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5 my-3">
                        <!--Carroussel-->
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="images/pdfsambasic/pdfsambasic1.png" class="img-fluid d-block w-100" alt="image1 de Pdfsam Basic">
                                </div>
                                <div class="carousel-item">
                                <img src="images/pdfsambasic/pdfsambasic2.png" class="img-fluid d-block w-100" alt="image2 de Pdfsam Basic">
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
                        <div class="col-sm-12 col-md-12 col-lg-10">
                                sources: 
                                <a href="https://framalibre.org/content/pdf-sam-basic">FramaLibre - PDFsam Basic</a>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
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
        
