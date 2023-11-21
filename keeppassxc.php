<!doctype html>
<html lang="fr">

<?php require_once('head.php') ?> <?php require_once('head.php') ?>

<body>
  <?php require_once('header.php'); ?>
  <main class="container">
    <div class="row">
      <article class="col-12">
        <br />
        <p>
          De nombreux logiciels libres existent et l'un des buts de l'association <a
            href="https://framasoft.org/fr">Framasoft<a>
              est de le présenter. Les contenus du site sont publiés sous la responsabilité des utilisateurs! Chacun
              en fait donc ce qu'il lui plait.
              J'ai décidé de placer leur informations sous licence licence CC-BY-SA 4.0 (celle de Wikipedia). Moins
              connu que VLC, Firefox et Gimp,
              je vais vous présenter dans les prochaine page trois autres logociels libres de qualité.
        </p>
        <p>
          KeePassXC est un fork communautaire de KeePassX faisant suite au développement très lent de KeePassX (la
          dernière version datant
          d'octobre 2016) et à l'absence de réponse de son mainteneur quant à une possible mise à jour.
        </p>
        <p>KeePassXC est construit à partir de la version 5.2 des bibliothèques Qt, ce qui en fait une application
          multi-plateforme
          , qui peut être exécutée sous Linux, Windows et macOS.
        </p>
        <p>Il utilise le format de base de données de mot de passe KeePass 2 (.kdbx) comme format natif. Il peut
          également importer
          (et convertir) les anciennes bases de données KeePass 1 (.kdb)
        </p>
        <p>Le support natif des Yubikey est également intégré au logiciel.</p>
      </article>
    </div>
    <div class="row justify-content-around ">
      <div class="col-sm-12 col-md-12 col-lg-4">
        <table class="table table-bordered ">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Disponible sur</th>
              <th scope="col">Windows, Mac OS X, GNU/Linux</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Alternative à:</th>
              <td>1Password</td>
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
              <td>KeePassXC Team</td>
            </tr>
            <tr>
              <th scope="row">Société ou organisation:</th>
              <td>KeePassXC Team</td>
            </tr>
            <tr>
              <th scope="row">Licence(s):</th>
              <td><a href="https://framalibre.org/licences/licence-publique-g%C3%A9n%C3%A9rale-gnu-gnu-gpl border">GNU
                  GPL</a></td>
            </tr>
          </tbody>
        </table>
        <a class="btn bouton-perso" href="https://keepassxc.org/" role="button">lien officiel</a>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div id="carouselExampleControls" class="carousel slide mx-auto d-block" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!--les mx-auto des images centre le carousel-->
              <img src="images/keeppassxc/screen_001.resized.png" class="img-fluid d-block mx-auto w-100"
                alt="image1 de keeppassxc">
            </div>
            <div class="carousel-item">
              <img src="images/keeppassxc/screen_002.resized.png" class="img-fluid d-block mx-auto w-100"
                alt="image2 de keeppassxc">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <main>

      <!--pied de page-->
      <footer>
        <div class="container border-top py-3 my-3">
          <div class="row justify-content-between">
            <div class="col-sm-12 col-md-10 col-lg-10">
              sources:
              <a href="https://framalibre.org/content/keepassxc">Framalibre - Keepassxc</a>
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
