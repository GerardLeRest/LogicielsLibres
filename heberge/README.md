# Logiciels Libres

## 1 - Préparation

- cloner le dossier sur github:
  
  ```bash
  git clone git@github.com:GerardLeRest/LogicielsLibres.git
  ```

- changer le nom du dossier: logicielslibres
  ouvrir un terminal et effectuer
  
  ```bash
  git checkout test
  ```
  
  ## 2 - IDE

- ouvrir le dossier logicielslibres avec un IDE

- ouvrir un terminal IDE et installer les dépendances manquantes:
  
  ```php
  composer install
  ```
  
  # 3 - Serveur

- enregistrer et déplacer le fichier dans /var/www/html. Donner les droits et proriétaires
  [apache2 [Wiki ubuntu-fr]](https://doc.ubuntu-fr.org/apache2#securite) 

- ouvrir un navigateur internet et rentrer l'url suivante:
  localhost/logicielslibres/accueil
