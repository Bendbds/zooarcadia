<?php

require_once('libs/global.php');

// Initialiser la connexion à la base de données
$conn = initConnexion();

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['form_submitted'])) {
    $pseudo = trim($_POST['pseudo']);
    $texte = trim($_POST['textavis']); // Utilisation du bon nom de champ ici

    // Validation simple des champs
    if (!empty($pseudo) && !empty($texte)) {
        // Préparer et exécuter la requête d'insertion
        $stmt = $conn->prepare("INSERT INTO avis (pseudo, texte) VALUES (?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ss", $pseudo, $texte);
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        $stmt->close();

        // Stocker la réussite dans une variable de session pour bloquer la duplication
        $_SESSION['form_submitted'] = true;

        // Rediriger l'utilisateur vers la même page avec une requête GET
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Certaines données sont manquantes.";
    }
}

// Récupérer les avis existants
$result = $conn->query("SELECT pseudo, texte FROM avis ORDER BY DATE DESC");

$avis = [];
while ($row = $result->fetch_assoc()) {
    $avis[] = $row;
}

// Afficher un message de succès après redirection
if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted'] === true) {
    // Supprimer l'indicateur de succès de la session pour éviter l'affichage répétitif
    unset($_SESSION['form_submitted']);
}

// Fermer la connexion à la base de données
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/avis.css">
    <script defer src="js/main.js"></script>
    <title>Vos avis sur le zoo ARCADIA</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div id="cover">
                <a href="index.html">
                    <img src="https://e-solution.timyx.com/wp-reseau/benoit/wp-content/uploads/sites/13/2024/08/logo-arcadia-zoo-benoit.svg" alt="Logo Arcadia Zoo" class="accueil">
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

    <div class="avis">
        <h2>Votre avis compte pour nous!</h2>
    </div>

    <form method="post" action="">
        <label for="pseudo">Votre pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Ex. : Pandaroux" size="40" maxlength="30">
        <label for="textavis">Votre avis :</label>
        <textarea name="textavis" id="textavis" placeholder="Qu'avez-vous pensé de votre visite ?" rows="10" cols="150"></textarea>
        <button type="submit" id="bouton">Envoyer mon avis</button>
    </form>

    <div id="form_submitted">
        <h2>Vos avis récents :</h2>
        <div class="avis-container">
            <div id="avis-list" class="avis-list">
                <?php foreach ($avis as $avisItem): ?>
                    <div class="avis-item">
                        <strong><?php echo htmlspecialchars($avisItem['pseudo']); ?>:</strong>
                        <p><?php echo nl2br(htmlspecialchars($avisItem['texte'])); ?></p>
                        <hr>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

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
