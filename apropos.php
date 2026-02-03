<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>À propos – PARIS XVI</title>
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
    <h1 class="site-title">
        <a href="index.php">PARIS XVI</a>
    </h1>
    <div class="top-links">
        <a href="#">🔍</a>
        <a href="compte.php">👤</a>
        <a href="panier.php">🛒</a>
    </div>
</header>

<!-- CONTENU CENTRAL -->
<section class="apropos">
    <h2>À propos de PARIS XVI</h2>

    <p>
        PARIS XVI est une marque française de prêt-à-porter née de la volonté de proposer
    des vêtements élégants, durables et intemporels. Inspirées par le style parisien,
    nos collections s’adressent à celles et ceux qui recherchent une mode sobre,
    raffinée et contemporaine.
    </p>

    
    <p>
        L’ensemble de nos vêtements est conçu à partir de matériaux soigneusement
        sélectionnés auprès de fournisseurs français. Nous privilégions des tissus de
        haute qualité, reconnus pour leur résistance, leur confort et leur durabilité,
        afin de garantir des pièces qui traversent le temps sans perdre de leur allure.
    </p>

    <p>
        Nos collections sont intégralement fabriquées en France, dans le respect du
        savoir-faire artisanal et des conditions de travail éthiques. Chaque pièce est
        pensée avec exigence, de la coupe aux finitions, pour offrir un vêtement
        parfaitement ajusté et agréable à porter au quotidien.
    </p>

    <p>
        Chez PARIS XVI, nous croyons en une mode responsable et raisonnée. Nous concevons
        des vêtements durables, loin des tendances éphémères, afin de proposer des pièces
        intemporelles qui s’intègrent naturellement dans toutes les garde-robes.
    </p>

    <img src="images/Atelier.jpg" alt="Présentation Paris XVI">

    <p><strong>PARIS XVI — L’élégance française, sans compromis.</strong></p>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Paris XVI – 
        <a href="apropos.php">À propos</a> | 
        <a href="#">Contact</a> | 
        Mentions légales
    </p>
</footer>

<script src="js/menu.js"></script>
</body>
</html>
