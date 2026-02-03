<?php
session_start();

// Vérifie si un ID est passé
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Supprime l'article du panier
    if (isset($_SESSION['panier'][$id])) {
        unset($_SESSION['panier'][$id]);
    }
}

// Redirige vers la page panier
header("Location: panier.php");
exit;
