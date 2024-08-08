<?php
session_start();

// Connexion à la base de données
$servername = "localhost"; // ou votre serveur
$username = "root"; // ou votre utilisateur MySQL
$password = "root"; // ou votre mot de passe MySQL
$dbname = "arcadia"; // nom de votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupérer les informations du formulaire
$identifiant = $_POST['identifiant'];
$motdepasse = $_POST['motdepasse'];

// Préparer et exécuter la requête SQL
$sql = "SELECT user_id, password, role FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $identifiant);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Vérifier le mot de passe
    if (password_verify($motdepasse, $user['password'])) {
        // Authentification réussie
        $_SESSION['loggedin'] = true;
        $_SESSION['role'] = $user['role'];
        $_SESSION['user_id'] = $user['user_id'];

        // Rediriger vers la page appropriée
        if ($user['role'] === 'veterinaire') {
            header('Location: connectveto.html');
        } else {
            // Redirection pour d'autres rôles (par exemple, employé, admin)
            header('Location: autre_page.html');
        }
        exit();
    } else {
        // Mot de passe incorrect
        $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
    }
} else {
    // Identifiant incorrect
    $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
}

// Fermer la connexion
$conn->close();

// Rediriger vers la page de connexion avec un message d'erreur
header('Location: connexion.html');
exit();

