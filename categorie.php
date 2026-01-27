<?php
session_start();
require __DIR__ . "/data/produits.php";

$cat = $_GET["cat"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= ucfirst($cat) ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1><?= strtoupper($cat) ?></h1>

<div class="produits">
<?php foreach ($produits as $p): ?>
    <?php if ($p["categorie"] === $cat): ?>
        <div class="produit">
            <img src="<?= $p["image"] ?>">
            <h3><?= $p["nom"] ?></h3>
            <p><?= $p["prix"] ?> €</p>
            <form action="ajouter_panier.php" method="post">
                <input type="hidden" name="id" value="<?= $p["id"] ?>">
                <button>Ajouter au panier</button>
            </form>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>

<a href="index.php">⬅ Retour</a>

</body>
</html>