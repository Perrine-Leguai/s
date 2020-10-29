<?php

include_once('Personne.php');

class Employe extends Personne{
    protected $salaire;

    // Get the value of salaire
     
    public function getSalaire() : float
    {
        return $this->salaire;
    }

    // Set the value of salaire
     
    public function setSalaire(float $newSalaire) : self
    {
        $this->salaire = $newSalaire;

        return $this;
    }

    // CONSTRUCT
    public function __construct(float $salaire, int $id, string $nom, string $prenom){
        $this->salaire = $salaire;
        parent::__construct($id, $nom, $prenom);
        }

    //LIRE
    public function __toString() :string
        {
            return 
            "\n [Salaire] : "  . $this->salaire .
            "\n " . parent::__toString();
        }
}
?>