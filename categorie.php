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
    <h1 class="site-title">MA BOUTIQUE</h1>
    <div class="top-links">
        <a href="#">🔍</a>
        <a href="#">👤</a>
        <a href="panier.php">🛒</a>
    </div>
</header>

<section class="categorie-title">
    <h2><?= strtoupper($cat) ?></h2>
</section>

<section class="produits-grid">
<?php
$count = 0;
foreach ($produits as $p):
    if ($p["categorie"] === $cat):
        $count++;
?>
    <div class="produit-card">
        <img src="<?= $p["image"] ?>" alt="<?= $p["nom"] ?>">
        <h3><?= $p["nom"] ?></h3>
        <p><?= $p["prix"] ?> €</p>
        <form action="ajouter_panier.php" method="post">
            <input type="hidden" name="id" value="<?= $p["id"] ?>">
            <button>Commander</button>
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