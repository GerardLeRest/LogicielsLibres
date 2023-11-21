<?php
    $liensFront = ['href = "index.php"', 'href = "keeppassxc.php"', 'href = "joplin.php"', 'href = "pdfsambasic.php"', 'href = "contact.php"'];
    $titresFront = ["Acceuil", "KeepPassXC", "Joplin", "PDFSam Basic", "Contactez-nous"];
    
    $pageCourante = basename($_SERVER['PHP_SELF']); //nom du fichier de la page courante 'aria-current="#"'
   
    // remplace la valeur du tableau $liensFront de la page courante par 
    for($i=0; $i<count($liensFront); $i++){
        $NomDeFichierActuel = substr($liensFront[$i], 8, strlen($liensFront[$i])-9);
       if ($pageCourante === $NomDeFichierActuel){
         $liensFront[$i] = 'aria-current="#"';
        }
    }