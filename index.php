<?php 
require_once 'Auteur.php';
$auteur1= new Auteur("King","Stephen");
$auteur2= new Auteur("Kin","Stephen");
$livre1= new Livre("Ca",1138,1986,20,$auteur1); 
$livre2= new Livre("Simetierre",374,1983,15,$auteur1);
$livre3= new Livre("Le Fleau",823,1978,14,$auteur1);
$livre4= new Livre("Shinning",447,1977,16,$auteur1);
echo $auteur1->afficherBibliographie();
?>