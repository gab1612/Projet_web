<?php
session_start();

// Optionnel : vider le panier après commande
unset($_SESSION["panier"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commande validée</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- MENU BURGER -->
<div id="burger">
    <span></span><span></span><span></span>
</div>

<div id="overlay"></div>

<nav id="side-menu">
    <a href="categorie.php?cat=homme">Homme</a>
    <a href="categorie.php?cat=femme">Femme</a>
    <a href="categorie.php?cat=enfant">Enfant</a>
</nav>

<!-- HEADER IDENTIQUE -->
<header class="top-bar">
    <div></div>
    <h1 class="site-title">PARIS XVI</h1>
    <div class="top-links">
        <a href="#"><img src="images/icone_recherche.png"></a>
        <a href="compte.php"><img src="images/icone_compte.png"></a>
        <a href="panier.php"><img src="images/icone_panier.png"></a>
    </div>
</header>

<!-- CONTENU PRINCIPAL -->
<main class="confirmation">
    <h2>Merci pour votre commande !</h2>
    <p>Votre commande a bien été prise en compte.</p>
    <a href="index.php" class="btn-retour">Retour à l’accueil</a>
</main>

<!-- FOOTER -->
<footer>
    <p>© 2026 PARIX XVI — À propos | Contact | Mentions légales</p>
</footer>

<script src="js/menu.js"></script>
</body>
</html>