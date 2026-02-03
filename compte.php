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
    <h1 class="site-title">PARIS XVI</h1>
    <div class="top-links">
        <a href="#">🔍</a>
        <a href="compte.php">👤</a>
        <a href="panier.php">🛒</a>
    </div>
</header>

<!-- BODY -->
<body1>
    <form id="registerForm" class="form">
        <input type="text" id="prenom" placeholder="Renseignez votre prénom" required>

        <input type="password" id="password" placeholder="Renseignez votre mot de passe" required>

        <input type="password" id="confirmPassword" placeholder="Confirmation de votre mot de passe" required>

        <p class="error" id="errorMessage"></p>

        <button type="submit">Créer un compte</button>
        <button type="submit">Se connecter</button>
    </form>
</div>

<script src="script.js"></script>
</body1>


<!-- FOOTER -->
<footer>
    <p>© 2026 Paris XVI – À propos | Contact | Mentions légales</p>
</footer>

<script src="js/menu.js"></script>
</body>
</html>