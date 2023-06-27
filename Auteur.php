<?php 
require_once 'Livre.php';
class Auteur{  //creation de la classe Auteur
    private string $_nom;
    private string $_prenom;
    private array $_bibliographie; // tableau qui contient les livres

public function __construct(string $nom, string $prénom){
    $this->_nom=$nom;
    $this->_prenom=$prénom;
    $this->_bibliographie=[];
}

public function getNom(){
    return $this->_nom;
}
public function setNom(string $nom){
    $this->_nom=$nom;
}
public function getPrénom(){
    return $this->_prenom;
}
public function setPrénom(string $prenom){
    $this->_prenom=$prenom;
}
public function getBibliographie(){
    return $this->_bibliographie;
}
public function setBibliographie(Livre $bibliographie){ //fonction qui ajoute les l'objet de type " livre " donner au tableau _bibliographie de l'auteur
    array_push($this->_bibliographie, $bibliographie);
}
// fonction qui affiche les information de tout les livres dans le tableau _bibliographie de l'auteur
public function afficherBibliographie(){  
    $liste= "Livres de ".$this->_prenom." ".$this->_nom.".<br>"."<br>";
    foreach ($this->_bibliographie as $livre){ 
            $liste.= $livre->getTitre()." (".$livre->getAnnee().
            ") : ".$livre->getNbpages()." pages / ".$livre->getPrix()." €"."<br>";
        }
    return $liste;
}
}

?>