<?php

class Personne {
    protected $id;
    protected $nom;
    protected $prenom;

    
    // Get the value of id
      
    public function getId() : int
    {
        return $this->id;
    }

    // Set the value of id
     
    public function setId(int $newId) : self
    {
        $this->id = $newId;

        return $this;
    }

    // Get the value of nom
      
    public function getNom() : string
    {
        return $this->nom;
    }

    // Set the value of nom
      
    public function setNom(string $newNom) : self
    {
        $this->nom = $newNom;

        return $this;
    }

    // Get the value of prenom
     
    public function getPrenom() : string
    {
        return $this->prenom;
    }

    //Set the value of prenom
     
    public function setPrenom(string $newPrenom) : self
    {
        $this->prenom = $newPrenom;

        return $this;
    }

    // CONSTRUCT
    public function __construct(int $id, string $nom, string $prenom){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        }

    //LIRE
    public function __toString() :string
        {
            return 
            "\n [Identifiant] : "  . $this->id .
            "\n [Nom] : "  . $this->nom .
            "\n [Prenom] : "  . $this->prenom ;
        }
    

   
}

?>