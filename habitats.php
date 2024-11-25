<?php
require_once('libs/global.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialiser la connexion à la base de données
    $conn = initConnexion();

    // Récupérer le nom de l'habitat depuis les données POST
    $habitat = isset($_POST['habitat']) ? $conn->real_escape_string($_POST['habitat']) : '';

    if (empty($habitat)) {
        die("Nom d'habitat non valide");
    }

    // Préparer la requête de mise à jour pour incrémenter le nombre de clics
    $stmt = $conn->prepare("INSERT INTO habitat_clicks (habitat, clicks) VALUES (?, 1) 
                            ON DUPLICATE KEY UPDATE clicks = clicks + 1");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param('s', $habitat); // 's' pour les chaînes de caractères
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    // Fermer la déclaration et la connexion
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/habitats.css">
    <script defer src="js/habitats.js"></script>
    <title>Les habitats du Zoo ARCADIA</title>
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
    </header>

    <h2 class="titrehabitats">Les habitats de votre zoo Arcadia</h2>

    <div class="explicatif">
        <p>Ici, vous allez pouvoir découvrir nos animaux et leurs habitats, mais également pouvoir suivre leurs états de santé mis à jour de manière régulière par nos vétérinaires. Le bien-être et la santé des animaux est une priorité tout comme le respect de l'environnement.
            En cliquant sur chaque bouton d' habitat, vous allez pouvoir décrouvrir nos animaux dont notre mascotte Pandaroux.
        </p>
    </div>

    <div id="habitattigre">
        <nav>
            <form method="POST" action="habitats.php" class="habitat-form">
                <input type="hidden" name="habitat" value="La foret tropicale">
                <button type="submit" class="foret">La forêt tropicale</button>

                <span class="liste-cachee">
                    <p>La forêt tropicale, habitat de notre tigre:</p>
                    <br>
                    <p>Nom: Tigrou</p>
                    <p>Espèce: Tigre du Bengale</p>
                    <p>Age: 5 ans</p>
                    <p>Poids: 110kg</p>
                    <p>Taille: 2,56 mètres</p>
                    <p>Avis du vétérinaire: Tigrou est en pleine forme et se rationne bien.</p>
                    <br>
                    <img class="tigrou" alt="Tigre du Bengale" src="https://cdn.pixabay.com/photo/2023/05/29/15/25/tiger-8026345_1280.jpg">
                    <br>
                </span>
            </form>
        </nav>
    </div>

    <div id="habitatgirafe">
        <nav>
            <form method="POST" action="habitats.php">
                <input type="hidden" name="habitat" value="La savane Africaine">
                <button type="submit" class="savane">La savane Africaine</button>

                <span class="liste-cachee-deux">
                    <p>La savane Africaine, habitat de nos girafes:</p>
                    <br>
                    <p>Nom: Riri</p>
                    <p>Espèce: Girafe</p>
                    <p>Age: 7 ans</p>
                    <p>Poids: 962kg</p>
                    <p>Taille: 4,23 mètres</p>
                    <p>Avis du vétérinaire: Riri est en pleine forme, son vaccin doit être fait</p>
                    <br>
                    <img class="girafes" alt="girafes Africaines" src="https://cdn.pixabay.com/photo/2019/07/27/06/21/giraffe-4366005_1280.jpg">
                    <br>

                    <br>
                    <p>Nom: Fifi</p>
                    <p>Espèce: Girafe</p>
                    <p>Age: 5 ans</p>
                    <p>Poids: 922kg</p>
                    <p>Taille: 4,03 mètres</p>
                    <p>Avis du vétérinaire: Fifi grandit bien, Nourriture acceptée</p>
                    <br>
                    <img class="girafes" alt="girafes Africaines" src="https://cdn.pixabay.com/photo/2020/06/15/09/24/zoo-5301038_1280.jpg">
                    <br>

                    <p>Nom: Loulou</p>
                    <p>Espèce: Girafe</p>
                    <p>Age: 9 ans</p>
                    <p>Poids: 1050kg</p>
                    <p>Taille: 4,58 mètres</p>
                    <p>Avis du vétérinaire: Loulou a besoin d'attention mais il va très bien</p>
                    <br>
                    <img class="girafes" alt="girafes Africaines" src="https://cdn.pixabay.com/photo/2020/11/22/20/39/giraffe-5767909_1280.jpg">
                    <br>
                </span>
            </form>
        </nav>
    </div>
    <div id="habitatpandaroux">
        <nav>
            <form method="POST" action="habitats.php">
                <input type="hidden" name="habitat" value="La foret montagneuse">
                <button type="submit" class="foret-montagneuse">La forêt montagneuse</button>

                <span class="liste-cachee-trois">
                    <p>La forêt montagneuse, habitat de notre mascotte :</p>
                    <br>
                    <p>Nom: Pandaroux</p>
                    <p>Espèce: Panda roux</p>
                    <p>Age: 6 ans</p>
                    <p>Poids: 4.6kg</p>
                    <p>Taille: 0,58 mètres</p>
                    <p>Avis du vétérinaire: Padaroux est la mascotte du zoo, il s'épanoui pleinement dans son environnement.</p>
                    <br>
                    <img class="pandaroux" alt="panda roux" src="https://cdn.pixabay.com/photo/2018/06/30/19/02/panda-3508153_1280.jpg">
                    <br>
                </span>
            </form>
        </nav>
    </div>
    <div id="habitatmanchot">
        <nav>
            <form method="POST" action="habitats.php">
                <input type="hidden" name="habitat" value="Le continent Antarctique">
                <button type="submit" class="antarctique">Le continent Antarctique</button>

                <span class="liste-cachee-quatre">
                    <p>Le continent Antarctique, habitat de notre manchot:</p>
                    <br>
                    <p>Nom: Alphonse</p>
                    <p>Espèce: Manchot empereur</p>
                    <p>Age: 8 ans</p>
                    <p>Poids: 27kg</p>
                    <p>Taille: 0.98 mètres</p>
                    <p>Avis du vétérinaire: Alphonse se sent bien et se nourrit avec envie.</p>
                    <br>
                    <img class="manchot" alt="Manchot empereur" src="https://cdn.pixabay.com/photo/2023/05/29/15/25/tiger-8026345_1280.jpg">
                    <br>
                </span>
            </form>
        </nav>
    </div>

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