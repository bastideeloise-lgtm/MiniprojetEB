<?php
include 'connexion.php';
include 'class_festival.php';
$exposant = new exposant();
$id = $_POST['id'];
$exposant->nom= $_POST['nom'];
$exposant->specialite= $_POST['specialite'];
$exposant->email= $_POST['email'];
$exposant->update($id, $pdo);
header('Location: exposant_list.php');
exit;
?>