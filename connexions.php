<?php
    session_start();
?>
            
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion employés zoo ARCADIA</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/connexion.css">
    <script defer src="js/main.js"></script>
</head>

<body>

    <header>
        <nav class="navbar">
            <div id="cover">
                <a href="index.html">
                    <img src="https://e-solution.timyx.com/wp-reseau/benoit/wp-content/uploads/sites/13/2024/08/logo-arcadia-zoo-benoit.svg"
                        alt="Logo Arcadia Zoo" class="accueil">
                </a>
            </div>
            <nav class="Header">
                <a href="connexions.php">Connexion employés</a>
                <a href="services.html">Services</a>
                <a href="habitats.php">Habitats</a>
                <a href="contact.html">Contact</a>
                <a href="avis.php">Avis</a>
            </nav>
            <button type="button" class="Menu">Menu</button>
        </nav>
    </header>

    <main>
        <div class="connexionemploye">
            <h2>Espace de connexion employés</h2>
        </div>
        <form method="post" action="connexion.php" id="formulaire">
            <label>
                Identifiant :
                <input type="text" name="identifiant" id="identifiant" required pattern="[a-z0-9]{3,16}"
                    placeholder="Votre Identifiant" size="40" maxlength="30">

            </label>

            <label>
                Mot de passe (8 caractères min) :
                <input type="password" name="motdepasse" id="motdepasse" required pattern="(?=.*[A-Z]).{8,}" minlength="8"
                    placeholder="Votre mot de passe" size="40" maxlength="30">
            </label>

            <button type="submit" id="bouton">Connexion</button>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<p class="error-message">' . htmlspecialchars($_SESSION['error']) . '</p>';
                unset($_SESSION['error']); // Supprimer le message d'erreur après l'affichage
            }
            ?>
        </form>
    </main>

    <footer>
        <div id="imgfooter">
            <img src="https://cdn.pixabay.com/photo/2018/11/11/16/51/bird-3809147_1280.jpg" alt="oiseau"
                class="imgbasg">
            <img src="https://cdn.pixabay.com/photo/2021/12/31/11/51/penguin-6905568_1280.jpg" alt="pingouin"
                class="imgbasd">
        </div>

        <div class="Mentions">
            <a href="mentions.html">Mentions légales</a>
            <a href="rgpd.html">Politique de données personnelles</a>
        </div>
    </footer>

</body>

</html>
