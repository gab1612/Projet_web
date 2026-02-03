<?php
session_start();
require __DIR__ . "/data/produits.php";

$panier = $_SESSION["panier"] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier – PARIS XVI</title>
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

<!-- BODY -->
<main class="page-content">
    <h1 class="titre-panier">Votre panier</h1>

    <?php if (!$panier): ?>
        <p style="text-align: center;">Panier vide</p>
    <?php else: ?>
        <div class="produits-grid">
            <?php foreach ($panier as $id => $qte): ?>
                <?php foreach ($produits as $p) if ($p["id"] == $id): ?>
                    <div class="produit-card">
                        <!-- Image du produit -->
                        <img src="<?= htmlspecialchars($p["image"]) ?>" alt="<?= htmlspecialchars($p["nom"]) ?>">

                        <!-- Nom et quantité -->
                        <h3><?= htmlspecialchars($p["nom"]) ?></h3>
                        <p>Quantité : <?= $qte ?></p>
                        <p>Prix : <?= $p["prix"] * $qte ?> €</p>

                        <!-- Bouton supprimer -->
                        <form action="supprimer_panier.php" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button type="submit" class="btn-panier">Supprimer</button>
                        </form>
                    </div>
                    <?php $total += $p["prix"] * $qte; endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="shopping-back">
            <a class="btn-retour" href="index.php">⬅ Continuer mon shopping</a>
        </div>

        <!-- Total et bouton commander -->
        <h3>Total : <?= $total ?> €</h3>
        <form action="commande.php" method="post">
            <button type="submit">Valider ma commande</button>
        </form>

        <!-- Bouton continuer shopping -->
        
    <?php endif; ?>
</main>

<!-- FOOTER -->
<footer>
    <p>© 2026 Paris XVI – À propos | Contact | Mentions légales</p>
</footer>

<script src="js/menu.js"></script>
</body>
</html>
