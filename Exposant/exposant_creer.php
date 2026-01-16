<?php
//print_r($_POST); 
include 'connexion.php';
include 'class_festival.php';

$exposant = new exposant();
$exposant->set_nom($_POST['nom']);
$exposant->set_email($_POST['email']);
$exposant->set_specialite($_POST['specialite']);
// Ici, vous devriez ajouter le code pour insérer l'exposant dans la base de données
// Par exemple :
$exposant= $exposant -> insert($pdo);
header('Location: exposant_list.php');  
exit();
?>