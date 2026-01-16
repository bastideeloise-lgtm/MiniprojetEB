<?php
include 'connexion.php';
include 'class_festival.php';
$exposant = new exposant();
$id = $_GET['id'];

$exposant->delete($id, $pdo);
header('Location: exposant_list.php');
exit;
?>