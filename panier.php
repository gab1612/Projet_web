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

<h1>🛒 Panier</h1>

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
<button>Commander</button>
<?php endif; ?>

<a href="index.php">⬅ Continuer</a>

</body>
</html>