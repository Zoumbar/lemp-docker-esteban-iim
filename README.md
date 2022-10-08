# lemp-docker-esteban-iim
 
## Première partie : Docker-compose.yml

Création d'un fichier docker-compose.yml a la racine du projet.
Dans ce fichier on va déclarer les services 
Dans cette stack LAMP ici : Linux, Nginx, Mysql et Php
Pour chaque service on va créer un fichier de configuration pour build donc on va déclarer le chemin pour celui-ci. 

## Deuxième partie : Containers et Dockerfile(s)

A la racide du projet, je créé un dossier .docker avec un dossier pour chaque service Nginx, Mysql et Php
Dans chacun de ces dossiers, je créé un fichier dockerfile où on va déclarer les commandes à RUN lors du build 

## Troisième partie : Config serveur

Pour Nginx j'ai opté pour une configuration plus simple que apache où on va configurer le serveur directement.
On y retrouve les options pour indiquer la racine du projet, la page d'accueil ou encore la page pour les erreurs 404

## Quatrième partie : Db et php

Pour commencer avec la database, j'ai choisi d'ajouter une image PhpMyAdmin qui est un gestionnaire visuel de base de donnée
J'ai créé deux tables: blog et users. Et les ai exportées dans un dossier db pour qu'elles soient initialisées lors du build. 
Dans un dossier src, on va y retrouver tous les fichiers php qui vont être compiler lors du build pour realiser notre site. 
Un fichier index.php pour montrer que Php fonctionne avec un 'Hello World'.
Une page pour les erreurs 404 qui se montre lorsqu'on on obtient une erreur404 (c'est option est a déclarer dans la config du  VirtualHost )
Le dossier admin va créé la route admin, où on retrouvera un formulaire de login. 
Lorsqu'on se connecte avec un user valide dans la table users, on arrive sur la page blog.php qui récupère des articles dans la table blog.

