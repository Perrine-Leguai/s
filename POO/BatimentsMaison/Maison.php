<?php
include_once('Batiment.php');

class Maison extends Batiment{
    private $nbPieces;

    // Get the value of nbPieces
      
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    // Set the value of nbPieces
     
    public function setNbPieces($nbPieces) :self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    public function __toString() :string
    {
        return "La maison est située au " . $this->adresse . " fait une superficie de " . $this->getSuperficie() . " répartie sur " . $this->nbPieces . " pièces.";
    }
}
?>