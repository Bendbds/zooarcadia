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
