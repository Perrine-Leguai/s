<?php
include_once('Batiment.php');

class Maison extends Batiment {

    private $nbPieces;

        // ATTENTION COMME LES ATTRIBUTS SONT EN PRIVATE DANS BATIMENT
        // IL FAUT UTILISER SETADRESSE
        //SINON NE REMPLIT PAS LES CASES ADRESSE ET SUPERFICIE
        //MAIS CREE DE NOUVELLES
    public function __construct(string $adresse, float $superficie, int $nbPieces){
        parent::__construct($adresse);
        //$this->adresse = $adresse;
        $this->setSuperficie($superficie);
        $this->nbPieces = $nbPieces;
    }    

        // EQUIVALENT
        // public function __construct(int $newNbPieces, string $newAdresse, int $newSuperficie){
        // $this->nbPieces = $newNbPieces;
        // parent::__construt(adresse)         ici ne présente pas d'intérêt car il n'y a qu'un seul attribut en parent, mais si il y en a plein = PRATIQUE +++
        // $this->setSuperficie($newSuperficie);
        // }



    /**
     * Get the value of nbPieces
     */ 
    public function getNbPieces() : int
    {
        return $this->nbPieces;
    }

    /**
     * Set the value of nbPieces
     *
     * @return  self
     */ 
    public function setNbPieces(int $nbPieces) : self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    //appelle de la fonction parent pour placer l'adresse ici aussi !
    public function __toString():string {
        return "Maison : " . parent::__toString() . " [Superficie] : " . $this->getSuperficie()
        . " [Nombre de pièces] : " . $this->nbPieces . "\n"; 
    }
}