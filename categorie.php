<?php
session_start();
require __DIR__ . "/data/produits.php";

$cat = $_GET["cat"] ?? "homme";
$cat = strtolower($cat);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= ucfirst($cat) ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- MENU BURGER + OVERLAY -->
<div id="burger"><span></span><span></span><span></span></div>
<div id="overlay"></div>
<nav id="side-menu">
    <a href="categorie.php?cat=homme">Homme</a>
    <a href="categorie.php?cat=femme">Femme</a>
    <a href="categorie.php?cat=enfant">Enfant</a>
</nav>

<!-- HEADER IDENTIQUE -->
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

<section class="categorie-title">
    <h2><?= strtoupper($cat) ?></h2>
</section>

<section class="produits-grid">
<?php
foreach ($produits as $p):
    if ($p["categorie"] === $cat):
?>
    <div class="produit-card">
        <img src="<?= $p["image"] ?>" alt="<?= $p["nom"] ?>">
        
        <h3><?= strtoupper($p["nom"]) ?></h3>
        <p><?= number_format($p["prix"], 2) ?> €</p>
        
        <form action="ajouter_panier.php" method="post" class="form-achat">
            <input type="hidden" name="id" value="<?= $p["id"] ?>">
            
            <div class="selection-taille">
                <label>TAILLE :</label>
                <select name="taille" class="select-paris">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>

            <button type="submit" class="btn-ajouter-direct">AJOUTER</button>
        </form>
    </div>
<?php
    endif;
endforeach;
?>
</section>

<footer>
    <p>© 2026 Ma Boutique — À propos | Contact | Mentions légales</p>
</footer>

<script src="js/menu.js"></script>
</body>
</html>