<?php
include("class_voiture.php");

$mavoiture = new Voiture(); 

// création d’une instanc
print $mavoiture->couleur;
print $mavoiture->belle;
$mavoiture=null;

?>