<?php
session_start();
$id = $_POST["id"];

$_SESSION["panier"][$id] = ($_SESSION["panier"][$id] ?? 0) + 1;
header("Location: panier.php");