<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('libs/global.php');

// Créer une connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupérer les informations du formulaire
$identifiant = trim($_POST['identifiant']);
$motdepasse = trim($_POST['motdepasse']);

// Préparer et exécuter la requête SQL
$sql = "SELECT user_id, password, role FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $identifiant);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows < 1) {
    $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
    header('Location: /connexions.php');
    exit(); // Ajout de exit() pour stopper l'exécution
}

$user = $result->fetch_assoc();
$stmt->close();
$conn->close();

// Vérifier le mot de passe
if (!password_verify($motdepasse, $user['password'])) {
    $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
    header('Location: /connexions.php');
    exit(); // Ajout de exit() pour stopper l'exécution
}

// Authentification réussie
session_regenerate_id(true); // Sécuriser la session
$_SESSION['user_id'] = $user['user_id'];
$_SESSION['role'] = $user['role'];

// Redirection basée sur le rôle
if ($user['role'] === 'veterinaire') {
    header('Location: /connectveto.php');
} elseif ($user['role'] === 'admin') {
    header('Location: /admin.php');
} elseif ($user['role'] === 'employe') {
    header('Location: /employe.php');
} else {
    header('Location: /connexions.php');
}
exit(); // Ajout de exit() pour stopper l'exécution
