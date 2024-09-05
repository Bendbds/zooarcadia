Guide de Déploiement pour l'Hébergement en local puis sur o2switch
Ce guide vous explique comment déployer le site web "Le Zoo d'Arcadia" en local sur o2switch. Ce guide suppose que vous avez déjà un compte et un espace d'hébergement chez o2switch.

Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants :

XAMPP ou équivalent.
phpMyAdmin pour gérer vos bases de données MySQL.
Un compte o2switch avec un domaine configuré.
Accès à cPanel pour gérer votre hébergement.
Un client FTP (comme FileZilla)  ou le système de gestion de fichier integré de O2SWITCH pour transférer les fichiers vers le serveur.
Git (facultatif, pour cloner le repository depuis GitHub).
npm - Pour installer les dépendances du projet, si nécessaire.
Éditeur de code (VSCode, Sublime Text, etc.) - Pour visualiser et modifier le code si nécessaire.

Instructions de Déploiement en local

Prérequis
XAMPP : Assurez-vous que XAMPP est installé sur votre machine. XAMPP inclut Apache, MySQL et PHP, qui sont nécessaires pour exécuter des sites web dynamiques en local.
VSCode : Utilisez un éditeur de code comme Visual Studio Code pour modifier et gérer votre code.
phpMyAdmin : Pour gérer vos bases de données MySQL, phpMyAdmin est intégré dans XAMPP, vous permettant de manipuler et administrer vos bases de données facilement via une interface web.


1. Installer XAMPP et Configurer l’Environnement
Lancer XAMPP: Ouvrez XAMPP et démarrez les modules Apache et MySQL.
Répertoire de Travail: Placez vos fichiers dans le dossier htdocs de XAMPP (généralement situé dans C:/xampp/htdocs).

2. Cloner le Repository (facultatif)
Si vous souhaitez travailler sur votre projet localement, suivez les étapes ci-dessous pour cloner votre repository depuis GitHub et l'installer dans le répertoire XAMPP.

Étapes :
Ouvrez VSCode et ouvrez un terminal intégré.

Exécutez la commande suivante pour cloner le repository :

bash
git clone https://github.com/Bendbds/le-zoo-arcadia.git
Accédez au répertoire du projet 

bash
cd le-zoo-arcadia
Déplacez le dossier cloné dans C:/xampp/htdocs/.

3. Configurer la Base de Données via phpMyAdmin
   
Si votre site utilise une base de données, vous devrez la configurer via phpMyAdmin.

Étapes :
Ouvrez un navigateur et allez à http://localhost/phpmyadmin.
Créez une nouvelle base de données pour votre projet.
Importez un fichier SQL (si vous en avez un) en utilisant l'onglet Import.
Modifiez les fichiers de configuration de votre projet (comme config.php) pour pointer vers cette nouvelle base de données, par exemple :

php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');  // L’utilisateur par défaut
define('DB_PASSWORD', '');  // Pas de mot de passe par défaut
define('DB_NAME', 'nom_de_votre_base_de_données');

4. Accéder à Votre Projet Localement
Ouvrez un navigateur et allez à http://localhost/le-zoo-arcadia/ pour voir votre projet en local.

5. Connexion à cPanel pour O2Switch
Connectez-vous à votre compte o2switch et accédez à cPanel.

Dans cPanel, allez dans Gestion des fichiers et ouvrez le répertoire public_html.

6. Transférer les Fichiers vers le Serveur
Utilisez un client FTP comme FileZilla ou le gestionnaire de fichiers o2Switch pour vous connecter à votre serveur o2switch. Les informations FTP sont disponibles dans votre cPanel, sous Comptes FTP.

Naviguez dans le répertoire public_html. Si vous souhaitez déployer le site à la racine de votre domaine principal, c'est ici que vous placerez vos fichiers.

Téléversez les fichiers du projet (ou le contenu du dossier build/dist si vous avez effectué un build) dans ce répertoire.

7. Configuration du Domaine (si nécessaire)
Si votre domaine n'est pas encore configuré, assurez-vous de pointer les enregistrements DNS de votre domaine vers les serveurs de noms d'o2switch. Ces informations se trouvent dans le panneau d'administration de votre domaine.

Si vous souhaitez déployer le site dans un sous-dossier ou sur un sous-domaine, configurez cela via cPanel en utilisant l'option Sous-domaines ou Domaines supplémentaires.

8. Tester le Déploiement
Une fois les fichiers téléversés, ouvrez votre navigateur et allez à votre domaine ou sous-domaine pour vérifier que le site "Le Zoo d'Arcadia" est bien en ligne.

Vérifiez que toutes les pages se chargent correctement et que le site fonctionne comme prévu.

8. Configurer un Certificat SSL (HTTPS)
Dans cPanel, allez dans la section Let's Encrypt™ SSL.

Sélectionnez votre domaine et suivez les instructions pour générer un certificat SSL gratuit.

Une fois le certificat installé, assurez-vous que toutes les URL de votre site utilisent HTTPS pour une sécurité accrue.

Notes Additionnelles
Si vous rencontrez des erreurs 500 ou d'autres problèmes liés au serveur, vérifiez les fichiers .htaccess pour toute mauvaise configuration.
Voilà, le site "Le Zoo d'Arcadia" est maintenant être en ligne et accessible sur o2switch !
