<?php
//print_r($_POST);
include 'connexion.php';
include 'class_joueur.php'; 
$joueur = new joueur(); 
$joueur->pseudo = $_POST['pseudo'];
$joueur->age = $_POST['age'];
$joueur->ville = $_POST['ville'];
//insertion du nouveau joueur : appel de la méthode insert
$joueur->insert($pdo);
//redirection vers la liste des joueurs

header('Location: joueur_list.php');
exit;

?>