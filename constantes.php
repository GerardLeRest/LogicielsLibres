<?php
    $liensFront = ['href = "index.php"', 'href = "keeppassxc.php"', 'href = "joplin.php"', 'href = "pdfsambasic.php"', 'href = "contact.php"'];
   
    $titresFront = ["Acceuil", "KeepPassXC", "Joplin", "PDFSam Basic", "Contactez-nous"];
    
    $titrePrincipauxFront=["Un logiciel libre est forcément open source. L'inverse n'est pas forcément vrai!","KeepPassXC", "Joplin","PdfSam Basic", "Contactez-nous"];
   
    $footerFront = ['<a href="https://fr.wikipedia.org/wiki/Richard_Stallman">Richard_Stallman -</a>' . 
    '<a href="https://fr.wikipedia.org/wiki/Logiciel_libre">https://fr.wikipedia.org/wiki/Logiciel_libre -</a>' .
    '<a href="https://fr.wikipedia.org/wiki/VLC_media_player">https://fr.wikipedia.org/wiki/VLC_media_player -</a> '.
    '<a href="https://fr.wikipedia.org/wiki/Mozilla_Firefox">https://fr.wikipedia.org/wiki/Mozilla_Firefox -</a>' .
    '<a href="https://fr.wikipedia.org/wiki/GIMP">https://fr.wikipedia.org/wiki/GIMP</a>',
    '<a href="https://framalibre.org/content/keepassxc">Framalibre - Keepassxc</a>]',
    '<a href="https://framalibre.org/content/joplin">https://framalibre.org/content/joplin</a>',
    '<a href="https://framalibre.org/content/pdf-sam-basic">https://framalibre.org/content/pdf-sam-basic</a>',
    " "];
    $indice=0; //indice de déplacement du tableau $footerFront
    
    // détermination de la page courante
    $pageCourante = basename($_SERVER['PHP_SELF']); //nom du fichier de la page courante 'aria-current="#"'

    // remplacement de la valeur du tableau $liensFront de la page courante par 
    for($i=0; $i<count($liensFront); $i++){
        $NomDeFichierActuel = substr($liensFront[$i], 8, strlen($liensFront[$i])-9);
       if ($pageCourante === $NomDeFichierActuel){
         $liensFront[$i] = 'aria-current="#"';
         $indice = $i;
        }
    }
