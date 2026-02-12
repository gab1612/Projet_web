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

<main class="page-content">
    <h1 class="titre-panier">Votre panier</h1>

    <?php if (!$panier): ?>
        <p style="text-align: center;">Panier vide</p>
    <?php else: ?>
        <div class="produits-grid">
            <?php 
            // On parcourt le panier (chaque $item contient id, taille et qte)
            foreach ($panier as $cle => $item): 
                $id = $item['id'];
                $taille = $item['taille'];
                $qte = $item['qte'];

                foreach ($produits as $p):
                    if ($p["id"] == $id): 
                        $sous_total = $p["prix"] * $qte;
                        $total += $sous_total;
            ?>
                    <div class="produit-card">
                        <img src="<?= htmlspecialchars($p["image"]) ?>" alt="<?= htmlspecialchars($p["nom"]) ?>">

                        <h3><?= htmlspecialchars($p["nom"]) ?></h3>
                        
                        <p><strong>Taille : <?= htmlspecialchars($taille) ?></strong></p>
                        
                        <p>Quantité : <?= $qte ?></p>
                        <p>Prix : <?= $sous_total ?> €</p>

                        <form action="supprimer_panier.php" method="post">
                            <input type="hidden" name="cle" value="<?= $cle ?>">
                            <button type="submit" class="btn-panier">Supprimer</button>
                        </form>
                    </div>
            <?php 
                    endif; 
                endforeach; 
            endforeach; 
            ?>
        </div>

        <div class="shopping-back">
            <a class="btn-retour" href="index.php">⬅ Continuer mon shopping</a>
        </div>

        <div class="panier-footer">
            <h3>Total : <?= number_format($total, 2) ?> €</h3>
            <form action="commande.php" method="post">
                <button type="submit" class="btn-valider-panier">Valider ma commande</button>
            </form>
        </div>
        
    <?php endif; ?>
</main>

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