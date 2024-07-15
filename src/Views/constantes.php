<?php 

$liensURL = ['href="accueil"', 'hreF="joplin"', 'href="keeppassxc"', 'href="pdfsambasic"', 'href="formulaire"', 'href="commentaires"'];
   
$titres = ["Introduction", "Joplin", "Keeppassxc", "PdfSamBasic", "Formulaire", "Commentaires"];

$titrePrincipaux = ["Introduction", "Joplin", "Keeppassxc", "PdfSamBasic", "Formulaire", "Commentaires"];

$indice = 0; 

$footerURL = [  '<a href="https://fr.wikipedia.org/wiki/Richard_Stallman">Richard_Stallman</a>' , 
                '<a href="https://framalibre.org/notices/joplin.html">Joplin.html">Joplin</a>' ,
                '<a href="https://framalibre.org/notices/keepassxc.html">KeePassXC</a> ',
                '<a href="https://framalibre.org/notices/pdf-sam-basic.html">PdfSamBasic</a>' ,
                '<a href="https://getbootstrap.com/">réalisé avec bootstrap</a>',
                '<a href="https://getbootstrap.com/">réalisé avec bootstrap</a>',
             ];


// détermination de la page courante - nom du fichier de la page courante sans extension
$pageCourante = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), ".php");

// remplacement de la valeur du tableau $liensURL de la page courante par 
for($i = 0; $i < count($liensURL); $i++){
    $NomDuFichierActuel = substr($liensURL[$i], 6, -1); // enlève href=" et le dernier "
    if ($pageCourante === $NomDuFichierActuel){
        $liensURL[$i] = 'aria-current="#"';
        $indice = $i;
    }    
        break; // sortir de la boucle une fois la page courante trouvée
}