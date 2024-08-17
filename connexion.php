<?php
session_start();

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arcadia1";

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

        // Redirection basée sur le rôle
        if ($user['role'] === 'veterinaire') {
            header('Location: /ZooArcadia/connectveto.html');
        } elseif ($user['role'] === 'admin') {
            header('Location: /ZooArcadia/admin.html');
        } elseif ($user['role'] === 'employe') {
            header('Location: /ZooArcadia/employe.html');
        } else {
            header('Location: /ZooArcadia/connexion.html');
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
header('Location: /ZooArcadia/connexion.html');
exit();


