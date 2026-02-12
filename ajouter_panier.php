<?php
session_start();

$id = $_POST['id'] ?? null;
$taille = $_POST['taille'] ?? 'M'; // Taille par défaut si vide

if ($id) {
    // On crée une clé unique pour différencier le même produit en S et en L
    $cle = $id . "_" . $taille;

    if (!isset($_SESSION['panier'][$cle])) {
        $_SESSION['panier'][$cle] = [
            'id' => $id,
            'taille' => $taille,
            'qte' => 1
        ];
    } else {
        $_SESSION['panier'][$cle]['qte']++;
    }
}

header("Location: panier.php");
exit;