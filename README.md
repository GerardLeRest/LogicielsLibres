
# Installation du site "Logiciels-Libres"
                

## 1 - Récupérer le dossier
- importer le projet Logiciels libre: 
git clone git@github.com:GerardLeRest/LogicielsLibres.git
- renommer le dossier récupéré en logicielslibres

## 2 - Installation sur le serveur.
- déplacer le dossier dans /var/wwW/html
- donner les droits et les permissions nécessaires
- changer les propriétaires:
    ```bash
  sudo chown -R $USER:www-data /var/www/html/soignemoi-web
  ```
- changer les droits:
  ```bash
  chmod -R a-rwx,u+rwX,g+rX /var/www/html/soignemoi-web
  ```



