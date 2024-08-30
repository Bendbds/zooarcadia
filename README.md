Guide de Déploiement pour l'Hébergement sur o2switch
Ce guide vous explique comment déployer le site web "Le Zoo d'Arcadia" sur o2switch. Ce guide suppose que vous avez déjà un compte et un espace d'hébergement chez o2switch.

Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants :

Un compte o2switch avec un domaine configuré.
Accès à cPanel pour gérer votre hébergement.
Un client FTP (comme FileZilla) pour transférer les fichiers vers le serveur.
Git (facultatif, pour cloner le repository depuis GitHub).
npm - Pour installer les dépendances du projet, si nécessaire.
Éditeur de code (VSCode, Sublime Text, etc.) - Pour visualiser et modifier le code si nécessaire.
Instructions de Déploiement
1. Cloner le Repository (facultatif)
Si vous souhaitez travailler sur le code localement avant de le déployer :

Ouvrez votre terminal et exécutez la commande suivante pour cloner le repository depuis GitHub :

bash
Copier le code
git clone https://github.com/Bendbds/le-zoo-arcadia.git
Accédez au répertoire du projet :

bash
Copier le code
cd le-zoo-arcadia
Installez les dépendances (si nécessaires) :

bash
Copier le code
npm install
2. Construire le Projet (si applicable)
Si votre projet nécessite une étape de build (par exemple, pour un projet React, Vue.js, etc.) :

bash
Copier le code
npm run build
Cela générera un dossier dist ou build contenant les fichiers prêts pour la production.

3. Connexion à cPanel
Connectez-vous à votre compte o2switch et accédez à cPanel.

Dans cPanel, allez dans Gestion des fichiers et ouvrez le répertoire public_html.

4. Transférer les Fichiers vers le Serveur
Utilisez un client FTP comme FileZilla pour vous connecter à votre serveur o2switch. Les informations FTP sont disponibles dans votre cPanel, sous Comptes FTP.

Naviguez dans le répertoire public_html. Si vous souhaitez déployer le site à la racine de votre domaine principal, c'est ici que vous placerez vos fichiers.

Téléversez les fichiers du projet (ou le contenu du dossier build/dist si vous avez effectué un build) dans ce répertoire.

5. Configuration du Domaine (si nécessaire)
Si votre domaine n'est pas encore configuré, assurez-vous de pointer les enregistrements DNS de votre domaine vers les serveurs de noms d'o2switch. Ces informations se trouvent dans le panneau d'administration de votre domaine.

Si vous souhaitez déployer le site dans un sous-dossier ou sur un sous-domaine, configurez cela via cPanel en utilisant l'option Sous-domaines ou Domaines supplémentaires.

6. Tester le Déploiement
Une fois les fichiers téléversés, ouvrez votre navigateur et allez à votre domaine ou sous-domaine pour vérifier que le site "Le Zoo d'Arcadia" est bien en ligne.

Vérifiez que toutes les pages se chargent correctement et que le site fonctionne comme prévu.

7. Configurer un Certificat SSL (HTTPS)
Dans cPanel, allez dans la section Let's Encrypt™ SSL.

Sélectionnez votre domaine et suivez les instructions pour générer un certificat SSL gratuit.

Une fois le certificat installé, assurez-vous que toutes les URL de votre site utilisent HTTPS pour une sécurité accrue.

Notes Additionnelles
Si vous rencontrez des erreurs 500 ou d'autres problèmes liés au serveur, vérifiez les fichiers .htaccess pour toute mauvaise configuration.
En cas de besoin, le support technique d'o2switch est disponible 24/7 pour vous aider avec le déploiement.
Voilà, votre site "Le Zoo d'Arcadia" devrait maintenant être en ligne et accessible sur o2switch !
Guide de Déploiement Local pour le site "Le Zoo d'Arcadia"

Ce guide vous explique comment déployer localement le site web "Le Zoo d'Arcadia" qui est actuellement hébergé sur Netlify.
Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

    Navigateur web moderne (Chrome, Firefox, Safari, etc.)
    Git - Pour cloner le repository depuis GitHub.
    npm - Pour installer les dépendances du projet, si nécessaires.
    Éditeur de code (VSCode, Sublime Text, etc.) - Pour visualiser et modifier le code si nécessaire.

Instructions de Déploiement

Suivez ces étapes pour déployer le site localement :

    Clonez le repository :

    Ouvrez votre terminal et exécutez la commande suivante pour cloner le repository depuis GitHub :

git clone https://github.com/Bendbds/le-zoo-arcadia.git

Accédez au répertoire du projet :

cd le-zoo-arcadia

Installez les dépendances (si nécessaires) :

npm install

Démarrez un serveur local :

live-server par exemple

Installez live-server (si ce n'est pas déjà fait) :

npm install -g live-server

Démarrez live-server :

Naviguez jusqu'au répertoire de votre projet dans le terminal, puis exécutez :

live-server

Cela démarre un serveur local avec rechargement automatique sur le port par défaut (généralement 8080).

Si besoin, ouvrez le site dans votre navigateur :

Une fois le serveur local démarré, ouvrez votre navigateur web et entrez l'URL suivante dans la barre d'adresse :

    http://localhost:8080

    Assurez-vous de remplacer 8080 si besoin par le port utilisé par votre serveur local si vous avez spécifié un port différent à l'étape précédente.

    Explorez le site :

    Le site "Le Zoo d'Arcadia" devrait maintenant être accessible localement dans votre navigateur. Naviguez à travers les différentes pages pour vérifier le fonctionnement et l'apparence du site.
