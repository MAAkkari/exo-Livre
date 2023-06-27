<?php 
require_once 'Auteur.php';
require_once 'Livre.php';
$auteur1= new Auteur("King","Stephen");

$livre1= new Livre("Ca",1138,1986,20,$auteur1); 
$livre2= new Livre("Simetierre",374,1983,15,$auteur1);
$livre3= new Livre("Le Fleau",823,1978,14,$auteur1);
$livre4= new Livre("Shinning",447,1977,16,$auteur1);
$tab=[$livre1,$livre2,$livre3,$livre4];

$auteur1->afficherBibliographie($tab)





?>