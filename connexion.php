<?php

require_once('libs/config.php');

session_start();

// Créer une connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

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

if ($result->num_rows < 1) {
    $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
    header('Location: /zooarcadia/connexion.html');
}

$user = $result->fetch_assoc();
// Fermer la connexion
$conn->close();

// Vérifier le mot de passe
if (!password_verify($motdepasse, $user['password'])) {
    $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
    header('Location: /zooarcadia/connexion.html');
}

// Authentification réussie
// $_SESSION['loggedin'] = true;
$_SESSION['user_id'] = $user['user_id'];
$_SESSION['role'] = $user['role'];

// Redirection basée sur le rôle
if ($user['role'] === 'veterinaire') {
    header('Location: /zooarcadia/connectveto.php');
} elseif ($user['role'] === 'admin') {
    header('Location: /zooarcadia/admin.php');
} elseif ($user['role'] === 'employe') {
    header('Location: /zooarcadia/employe.php');
} else {
    header('Location: /zooarcadia/connexion.html');
}
exit();
