<?php
include 'connexion.php';
include 'class_joueur.php';
$joueur = new joueur();
$id = $_POST['id'];
$joueur->pseudo= $_POST['pseudo'];
$joueur->age= $_POST['age'];
$joueur->ville= $_POST['ville'];
$joueur->update($id, $pdo);
header('Location: joueur_list.php');
exit;
?>