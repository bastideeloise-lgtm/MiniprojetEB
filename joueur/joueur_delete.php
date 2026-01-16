<?php
include 'connexion.php';
include 'class_joueur.php';
$joueur = new joueur();
$id = $_GET['id'];

$joueur->delete($id, $pdo);
header('Location: joueur_list.php');
exit;
?>