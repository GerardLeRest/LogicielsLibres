<?php 

$liensURL = ['href="accueil"', 'href="joplin"', 'href="keeppassxc"', 'href="pdfsambasic"', 'href="formulaire"', 'href="commentaires"'];
   
$titres = ["Introduction", "Joplin", "Keeppassxc", "PdfSamBasic", "Formulaire", "Commentaires"];

$titrePrincipaux = ["Introduction", "Joplin", "Keeppassxc", "PdfSamBasic", "Formulaire", "Commentaires"];

$footerURL = [  '<a href="https://fr.wikipedia.org/wiki/Richard_Stallman">Richard_Stallman</a>' , 
                '<a href="https://framalibre.org/notices/joplin.html">Joplin.html</a>' ,
                '<a href="https://framalibre.org/notices/keepassxc.html">KeePassXC</a> ',
                '<a href="https://framalibre.org/notices/pdf-sam-basic.html">PdfSamBasic</a>' ,
                '<a href="https://getbootstrap.com/">réalisé avec bootstrap</a>',
                '<a href="https://getbootstrap.com/">réalisé avec bootstrap</a>',
             ];

$indice = -1; // Initialiser à -1 pour indiquer que la page n'a pas été trouvée

// Détermination de la page courante - nom du fichier de la page courante sans extension
$pageCourante = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), ".php");

// Remplacement de la valeur du tableau $liensURL de la page courante par 
for($i = 0; $i < count($liensURL); $i++){
    $NomDuFichierActuel = substr($liensURL[$i], 6, -1); // Enlève href=" et le dernier "
    if ($pageCourante === $NomDuFichierActuel){
        $liensURL[$i] = 'aria-current="#"';
        $indice = $i;
        break; // Sortir de la boucle une fois la page courante trouvée
    }    
}