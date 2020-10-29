<?php

class Batiment {
    protected $adresse;
    private $superficie;

    // Get the value of adresse
      
    public function getAdresse() :string
    {
        return $this->adresse;
    }

    //Set the value of adresse
     
    public function setAdresse($adresse) : self
    {
        $this->adresse = $adresse;

        return $this;
    }

    // Get the value of superficie
      
    public function getSuperficie() : float
    {
        return $this->superficie;
    }

    // Set the value of superficie
      
    public function setSuperficie($superficie) : self
    {
        $this->superficie = $superficie;

        return $this;
    }

    //représentation du bat
    public function __toString() :string
    {
        return " Le batiment est situé au " . $this->adresse . " et il fait une superficie de " . $this->superficie . " m².";
    }
}


?>