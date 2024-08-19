<?php
require_once('libs/global.php');


checkAccess();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/connectveto.css">
    <script defer src="js/connectveto.js"></script>
    <title>Connexion employés zoo ARCADIA</title>
</head>
<body>

<header>
    <nav class="navbar">
        <div id="cover">
            <a href="index.html">
                <img src= "https://e-solution.timyx.com/wp-reseau/benoit/wp-content/uploads/sites/13/2024/08/logo-arcadia-zoo-benoit.svg" alt="Logo Arcadia Zoo" class="accueil">
            </a>
        </div>
        <nav class="Header">
            <a href="connexion.html">Connexion employés</a>
            <a href="services.html">Services</a>
            <a href="habitats.html">Habitats</a>
            <a href="contact.html">Contact</a>
            <a href="avis.html">Avis</a>
            <a href="logout.php">Deconnexion</a>
            
        </nav>
        <button type="button" class="Menu">Menu</button>
</header>
    <h1> Espace vétérinaire - Zoo Arcadia</h1>  
<main>
    <div class="container">
        <label for="animals">Choisissez un animal :</label>
        <select id="animals">
            <option value="Pandaroux">Panda Pandaroux</option>
            <option value="Riri">Girafe Riri</option>
            <option value="Fifi">Girafe Fifi</option>
            <option value="Loulou">Girafe Loulou</option>
            <option value="Tigrou">Tigre Tigrou</option>
            <option value="Alphonse">Manchot Alphonse</option>
        </select>

        
        <div id="animal-form">
            <label for="quantity">Quantité de nourriture donnée :</label>
            <input type="number" id="quantity" placeholder="Entrez la quantité en grammes" />

            <label for="checkup_date">Date du suivi :</label>
            <input type="date" id="checkup_date">

            <label for="health">État de santé :</label>
            <select id="health">
                <option value="excellent">Excellent</option>
                <option value="tresbon">Très Bon</option>
                <option value="bon">Bon</option>
                <option value="moyen">Moyen</option>
                <option value="a_soigner">À soigner</option>
            </select>

            <button type="button" onclick="submitForm()">Valider</button>
        </div>
    </div>
    
    </main>
    <footer>
    <div id="imgfooter">
        <img src="https://cdn.pixabay.com/photo/2018/11/11/16/51/bird-3809147_1280.jpg" alt="oiseau" class="imgbasg">
        <img src="https://cdn.pixabay.com/photo/2021/12/31/11/51/penguin-6905568_1280.jpg" alt="pingouin" class="imgbasd">
    </div>

    <div class="Mentions">
        <a href="mentions.html">Mentions légales</a>
        <a href="rgpd.html">Politique de données personnelles</a>
    </div>
</footer>

</body>
</html>
