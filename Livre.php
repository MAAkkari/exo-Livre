
    <?php 
    class Livre{ //Creation de la classe livre
        private string $_titre;
        private int $_nbpages;
        private int $_année;
        private float $_prix;
        private Auteur $_auteur;

    function __construct(string $titre,int $nbpages,int $année,float $prix ,Auteur $auteur){ // constructeur
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
    public function setAuteur(Auteur $auteur){
        $this->_auteur=$auteur;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function setPrix(float $prix){
        $this->_prix=$prix;
    } 
    }
    ?>
