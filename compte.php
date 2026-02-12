<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PARIS XVI</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- HEADER -->
<header class="top-bar">
    <div></div>
    <h1 class="site-title">
        <a href="index.php">PARIS XVI</a>
    </h1>
    <div class="top-links">
        <a href="#"><img src="images/icone_recherche.png"></a>
        <a href="compte.php"><img src="images/icone_compte.png"></a>
        <a href="panier.php"><img src="images/icone_panier.png"></a>
    </div>
</header>

<!-- BODY -->
 <div class="page">
    <div class="form-container">
        <h1>Mon Compte</h1>
        <form id="registerForm" class="form">
            <input type="text" id="prenom" placeholder="Prénom" required>
            <input type="password" id="password" placeholder="Mot de passe" required>

            <button type="submit" id="createAccount">Créer un compte</button>
            <button type="submit" id="login">Se connecter</button>
        </form>
    </div>
</div>

<script src="js/compte.js"></script>

<br>
<br>

<!-- FOOTER -->
<footer>
    <p>© 2026 Paris XVI – 
        <a href="apropos.php">À propos</a> | 
        Contact | 
        Mentions légales
    </p>
</footer>

<script src="js/menu.js"></script>
</body>
</html>