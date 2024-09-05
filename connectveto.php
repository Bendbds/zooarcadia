<?php
require_once('libs/global.php');

// Vérifiez si la fonction checkAccess() est nécessaire
checkAccess();

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialiser la connexion à la base de données
    $conn = initConnexion();

    // Vérifiez si les variables POST sont définies
    if (isset($_POST['animal_id'], $_POST['quantity'], $_POST['checkup_date'], $_POST['health'])) {
        $animal_id = $_POST['animal_id'];
        $quantity = $_POST['quantity'];
        $checkup_date = $_POST['checkup_date'];
        $health = $_POST['health'];

        // Préparer et exécuter la requête d'insertion
        $stmt = $conn->prepare("INSERT INTO animal_data (animal, quantity, checkup_date, health, user_id) VALUES (?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param('sissi', $animal_id, $quantity, $checkup_date, $health, $_SESSION['user_id']);
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        $stmt->close();
        $conn->close();

        // Stocker la réussite dans une variable de session
        $_SESSION['success'] = true;

        // Redirige l'utilisateur vers la même page avec une requête GET
        header("Location: " . $_SERVER['PHP_SELF']);

        exit();
    } else {
        echo "Certaines données sont manquantes.";
    }
}

// Initialiser la connexion à la base de données
$conn = initConnexion();

// Préparer et exécuter la requête de sélection
$sql = "SELECT * FROM animal_data a 
        JOIN users u ON u.user_id = a.user_id
        ORDER BY checkup_date DESC";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/connectveto.css">
    <script defer src="js/main.js"></script>
    <title>Connexion employés zoo ARCADIA</title>
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
                <a href="connexion.html">Connexion employés</a>
                <a href="services.html">Services</a>
                <a href="habitats.php">Habitats</a>
                <a href="contact.html">Contact</a>
                <a href="avis.php">Avis</a>
                <a href="logout.php">Déconnexion</a>
            </nav>
            <button type="button" class="Menu">Menu</button>
        </nav>
    </header>

    <h1>Espace vétérinaire - Zoo Arcadia</h1>

    <main>
        <div class="container">
            <form id="animal-form" method="post">
                <div class="form-group">
                    <label for="animals">Choisissez un animal :</label>
                    <select name="animal_id" id="animals">
                        <option value="Pandaroux">Panda Pandaroux</option>
                        <option value="Riri">Girafe Riri</option>
                        <option value="Fifi">Girafe Fifi</option>
                        <option value="Loulou">Girafe Loulou</option>
                        <option value="Tigrou">Tigre Tigrou</option>
                        <option value="Alphonse">Manchot Alphonse</option>
                    </select>
                </div>

                <div>
                    <label for="quantity">Quantité de nourriture donnée :</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Entrez la quantité en grammes" required />
                </div>

                <div>
                    <label for="checkup_date">Date du suivi :</label>
                    <input type="date" id="checkup_date" name="checkup_date" required />
                </div>

                <div>
                    <label for="health">État de santé :</label>
                    <select id="health" name="health">
                        <option value="excellent">Excellent</option>
                        <option value="très bon">Très Bon</option>
                        <option value="bon">Bon</option>
                        <option value="moyen">Moyen</option>
                        <option value="à soigner">À soigner</option>
                    </select>
                </div>
 
                <button type="submit">Ajouter</button>
                <?php
                if (isset($_SESSION['success']) && $_SESSION['success'] === true) {
                    echo '<p>Les informations ont été enregistrées avec succès !</p>';
                    // Reset
                    unset($_SESSION['success']);
                }
                ?>
            </form>

            <div class="container">
                <h2>Suivi des animaux</h2>
                <textarea readonly name="soins" id="soins" rows="10" cols="50">
            <?php
            foreach ($result as $data) {
                echo 'Données transmises par : ' . $data['username'] . "\n" .
                    'Animal choisi : ' . $data['animal'] . "\n" .
                    'Quantité de nourriture donnée : ' . $data['quantity'] . "\n" .
                    'Date du suivi : ' . $data['checkup_date'] . "\n" .
                    'Etat de santé : ' . $data['health'] . "\n" .
                    '---' . "\n";
            }
            ?>
            </textarea>
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