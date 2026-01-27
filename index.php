<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Boutique</title>
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
    <h1 class="site-title">MA BOUTIQUE</h1>
    <div class="top-links">
        <a href="#">🔍</a>
        <a href="#">👤</a>
        <a href="panier.php">🛒</a>
    </div>
</header>

<!-- SECTIONS -->
<section class="categories">
    <a href="categorie.php?cat=homme">
        <img src="images/homme.jpg">
        <span>HOMME</span>
    </a>
    <a href="categorie.php?cat=femme">
        <img src="images/femme.jpg">
        <span>FEMME</span>
    </a>
    <a href="categorie.php?cat=enfant">
        <img src="images/enfant.jpg">
        <span>ENFANT</span>
    </a>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Ma Boutique – À propos | Contact | Mentions légales</p>
</footer>

<script src="js/menu.js"></script>
</body>
</html>