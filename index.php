<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PARIS XVI</title>
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

<!-- SECTIONS -->
<section class="categories">
    <a href="categorie.php?cat=homme">
        <img src="images/homme_accueil.png">
        <span>HOMME</span>
    </a>
    <a href="categorie.php?cat=femme">
        <img src="images/femme_accueil.jpg">
        <span>FEMME</span>
    </a>
    <a href="categorie.php?cat=enfant">
        <img src="images/enfant_accueil.png">
        <span>ENFANT</span>
    </a>
</section>

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