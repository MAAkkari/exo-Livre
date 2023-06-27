<?php 
class Auteur{  //creation de la classe Auteur
    private string $_nom;
    private string $_prénom;

public function __construct(string $nom, string $prénom){
    $this->_nom=$nom;
    $this->_prénom=$prénom;
}

public function getNom(){
    return $this->_nom;
}
public function setNom(string $nom){
    $this->_nom=$nom;
}
public function getPrénom(){
    return $this->_prénom;
}
public function setPrénom(string $prénom){
    $this->_prénom=$prénom;
}
// fonction qui parcoure un tableau de livre et qui compare l'auteur a $this si ca coincide elle affiche les informations
public function afficherBibliographie(array $tab){  
    echo "Livres de ".$this->_prénom." ".$this->_nom.".<br>"."<br>";
    foreach ($tab as $livre){ 
        if ($livre->getAuteur()==$this){
            echo $livre->getTitre()." (".$livre->getAnnée().
            ") : ".$livre->getNbpages()." pages / ".$livre->getPrix()." €"."<br>";
        }
    }}
}

?>