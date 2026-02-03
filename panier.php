<?php
session_start();
require __DIR__ . "/data/produits.php";
$panier = $_SESSION["panier"] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
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
        <a href="#">🔍</a>
        <a href="compte.php">👤</a>
        <a href="panier.php">🛒</a>
    </div>
</header>

<h1 class="titre-panier">Votre panier</h1>


<?php if (!$panier): ?>
<p>Panier vide</p>
<?php else: ?>
<ul>
<?php foreach ($panier as $id => $qte): ?>
<?php foreach ($produits as $p) if ($p["id"] == $id): ?>
    <li>
        <?= $p["nom"] ?> x<?= $qte ?> –
        <?= $p["prix"] * $qte ?> €
        <a href="supprimer_panier.php?id=<?= $id ?>">❌</a>
    </li>
<?php $total += $p["prix"] * $qte; endif; ?>
<?php endforeach; ?>
</ul>

<h3>Total : <?= $total ?> €</h3>
<form action="commande.php" method="post">
    <button type="submit">Commander</button>
</form>
<?php endif; ?>

<a href="index.php">⬅ Continuer mon shopping </a>


<footer>
    <p>© 2026 Paris XVI – À propos | Contact | Mentions légales</p>
</footer>

</body>
</html>