# Bconnect-Project

Bconnect - Mini Réseau Social

Bconnect est un mini-réseau social inspiré par Facebook. Il permet aux utilisateurs de créer un profil, de se connecter avec d'autres utilisateurs, de publier des messages, d'aimer et de commenter des publications, etc. Ce projet a été développé en utilisant PHP, POO (Programmation Orientée Objet), JavaScript, MySQL, CSS (Bootstrap) et HTML. Fonctionnalités

Créer un compte utilisateur
Se connecter avec un compte utilisateur
Modifier le profil utilisateur (nom, photo de profil, informations personnelles, etc.)
Publier des messages (statuts), des photos avec une legende
Aimer et commenter les messages
Rechercher d'autres utilisateurs
Se connecter avec d'autres utilisateurs
Flux d'actualités pour afficher les messages des amis
Tableau de bord pour afficher les propres messages de l'utilisateur
Page de profil pour afficher les informations d'un utilisateur et ses publications
Système de notifications pour les nouveaux commentaires, likes, etc.
chater avec ses amies en temps reèl avec **Bconnect-CHAT**
vendre ses produis sur market-Bconnect
changer la taille , couleur , le fond (light ou dark)......
creer une page Bconnect 

Prérequis

Avant de commencer, assurez-vous que les éléments suivants sont installés sur votre système :

Serveur Web (comme Apache)
PHP version 8.2 ou supérieure
MySQL ou un autre système de gestion de base de données
Bootstrap (vous pouvez inclure les fichiers Bootstrap via un CDN)

Installation

Clonez ce référentiel (repository) sur votre ordinateur en utilisant la commande suivante :

bash :
    **git clone https://github.com/votre-nom-utilisateur/Bconnect.git**

Créez une base de données MySQL pour le projet et importez les tables à partir du fichier database.sql fourni.

Modifiez le fichier config.php situé dans le dossier includes pour configurer les informations de connexion à la base de données :

php

<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'votre_utilisateur');
    define('DB_PASS', 'votre_mot_de_passe');
    define('DB_NAME', 'votre_base_de_donnees');

Assurez-vous d'avoir les droits d'écriture sur les dossiers uploads pour les photos de profil des utilisateurs.

Lancez l'application en accédant à l'URL de votre serveur local dans un navigateur.

Structure du projet PHP/ : login.php : Page d'accueil et connexion. signin.php: page d'inscription profile.php : Page de profil de l'utilisateur. dashboard.php : Tableau de bord de l'utilisateur avec ses propres publications. search.php : Page de recherche d'utilisateurs. ... includes/ : Dossier contenant les fichiers PHP réutilisables. config.php : Configuration de la base de données. db.php : Classe pour gérer la connexion à la base de données. user.php : Classe représentant un utilisateur avec des méthodes pour les opérations courantes. post.php : Classe représentant un message (post) avec des méthodes pour les opérations courantes. notification.php : Classe représentant les notifications avec des méthodes pour les opérations courantes. css/ : Dossier contenant les fichiers CSS pour la mise en page. js/ : Dossier contenant les fichiers JavaScript pour les fonctionnalités interactives. uploads/ : Dossier pour stocker les photos de profil des utilisateurs.

Contribuer

Si vous souhaitez contribuer à ce projet, vous pouvez suivre les étapes suivantes :

Fork (bifurquer) ce référentiel en cliquant sur le bouton "Fork" en haut de cette page.

Clonez votre fork sur votre ordinateur :

bash

git clone https://github.com/bahAli21/Bconnect-Project.git

Créez une branche pour vos modifications avec : git branch nameBranch

css

git checkout -b ma-branche

Faites vos modifications et committez les :

sql

git commit -m "Description des modifications"

Poussez (push) vos modifications vers votre fork :

perl

git push origin ma-branche

Ouvrez une demande d'extraction (pull request) en cliquant sur le bouton "New pull request" sur cette page.

Décrivez vos modifications dans la demande d'extraction et soumettez-la.

Auteur

@BAH MAMADOU ALIOU

Ce projet est sous licence MIT License.

