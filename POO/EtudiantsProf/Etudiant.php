<?php
include_once('Personne.php');

class Etudiant extends Personne {
    private $cne;

    // Get the value of cne
    
    public function getCne() : string
    {
        return $this->cne;
    }

    // Set the value of cne
     
    public function setCne(string $newCne) : self
    {
        $this->cne = $cne;

        return $this;
    }

    // CONSTRUCT
    public function __construct(string $cne, int $id, string $nom, string $prenom){
        $this->cne = $cne;
        parent::__construct($id, $nom, $prenom);
        }

    //LIRE
    public function __toString() :string
        {
            return 
            "\n [Cne] : "  . $this->cne .
            "\n " . parent::__toString();
        }
}

?>