<?php

include_once('Employe.php');

class Professeur extends Employe {
    private $specialite;

    // Get the value of specialite
     
    public function getSpecialite() : string
    {
        return $this->specialite;
    }

    // Set the value of specialite
      
    public function setSpecialite(string $newSpecialite) : self
    {
        $this->specialite = $newSpecialite;

        return $this;
    }

// CONSTRUCT
    public function __construct(string $specialite, float $salaire, int $id, string $nom, string $prenom ){
        $this->specialite = $specialite;
        parent::__construct($salaire, $id, $nom, $prenom, );
        
        }

//LIRE
    public function __toString() :string
        {
            return 
            "\n [Spécialité] : " . $this->specialite .
            "\n " . parent::__toString();
        }
}


?>