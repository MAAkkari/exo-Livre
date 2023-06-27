<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Livre{ //Creation de la classe livre
        private string $_titre;
        private int $_nbpages;
        private int $_année;
        private int $_prix;
        private string $_auteur;

    function __construct(string $titre,int $nbpages,int $année,int $prix ,string $auteur){ // constructeur
        $this->_titre=$titre;
        $this->_nbpages=$nbpages;
        $this->_année=$année;
        $this->_prix=$prix;
        $this->_auteur=$auteur;
    }
    //getters et setters
    public function getTitre(){
        return $this->_titre;
    }
    public function setTitre(string $titre){
        $this->_titre=$titre;
    }
    public function getNbpages(){
        return $this->_nbpages;
    }
    public function setNbpages(int $nbpages){
        $this->_nbpages=$nbpages;
    }
    public function getAnnée(){
        return $this->_année;
    }
    public function setAnnée(int $année){
        $this->_année=$année;
    }
    public function getAuteur(){
        return $this->_auteur;
    }
    public function setAuteur(string $auteur){
        $this->_auteur=$auteur;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function setPrix(int $prix){
        $this->_prix=$prix;
    } 
    }
    function afficherBibliographie(array $tab,string $auteur){ // fonction qui affiche les livres de l'auteur donné 
        echo "Livres $auteur"."<br>"."<br>";
        foreach ($tab as $livre){ // foreach qui parcoure le tableau et compare le nom de l'auteur au _auteur de chaque livre et affiche dans le bon format
            if ($livre->getAuteur()==$auteur){
                echo $livre->getTitre()." (".$livre->getAnnée().
                ") : ".$livre->getNbpages()." pages / ".$livre->getPrix()." €"."<br>";
            }
        }}
        //livres
    $livre1= new Livre("Ca",1138,1986,20,"Stephen King"); 
    $livre2= new Livre("Simetierre",374,1983,15,"Stephen King");
    $livre3= new Livre("Le Fleau",823,1978,14,"Stephen King");
    $livre4= new Livre("Shinning",447,1977,16,"Stephen King");
    $tab=[$livre1,$livre2,$livre3,$livre4]; //tableau qui contient tout les livres 
    afficherBibliographie($tab,"Stephen King");
    ?>
</body>
</html>