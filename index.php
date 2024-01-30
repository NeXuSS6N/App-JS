<?php 
// index.php
session_start();

// Si l'utilisateur est connecté, on récupère son identité via la session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <title>Page d'accueil</title>
    </head>
    <body>
<h2>Bienvenue ! <br> Login : admin@example.com <br> Password : moi</h2>
        <h1>Page d'accueil</h1>
        <?php if ($identity==null): ?>
        <a href="login.php">Connexion</a>
        <?php else: ?>
        <strong>Bienvenue, <?= $identity ?></strong> <a href="logout.php">Déconnexion</a>
        <?php endif; ?>
        
    </body>
</html>
