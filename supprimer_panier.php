<?php
session_start();

// On vérifie si la 'cle' (id + taille) est bien envoyée par le formulaire
if (isset($_POST['cle'])) {
    $cle = $_POST['cle'];

    // On supprime l'entrée spécifique du tableau panier en utilisant cette clé
    if (isset($_SESSION['panier'][$cle])) {
        unset($_SESSION['panier'][$cle]);
    }
}

// Redirige vers la page du panier pour voir le résultat
header("Location: panier.php");
exit;