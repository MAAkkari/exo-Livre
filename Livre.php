
    <?php 
    require_once 'Auteur.php';
    class Livre{ //Creation de la classe livre
        private string $_titre;
        private int $_nbpages;
        private int $_annee;
        private float $_prix;
        private Auteur $_auteur;

    function __construct(string $titre,int $nbpages,int $annee,float $prix ,Auteur $auteur){ // constructeur
        $this->_titre=$titre;
        $this->_nbpages=$nbpages;
        $this->_annee=$annee;
        $this->_prix=$prix;
        $this->_auteur=$auteur;
        $auteur->setBibliographie($this); //l'objet crée est directement ajouter dans le tableau associer a l'autre donné
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
    public function getAnnee(){
        return $this->_annee;
    }
    public function setAnnee(int $annee){
        $this->_annee=$annee;
    }
    public function getAuteur(){
        return $this->_auteur;
    }
    public function setAuteur(Auteur $auteur){
        $this->_auteur=$auteur;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function setPrix(float $prix){
        $this->_prix=$prix;
    } 
    function __toString(){ //fonction qui affiche les caracteristique du livre dans le bon format quand on essaye de l'afficher
    return $this->_titre." (".$this->_annee.
    ") : ".$this->_nbpages." pages / ".$this->_prix." €"."<br>";
    }
}
    ?>
