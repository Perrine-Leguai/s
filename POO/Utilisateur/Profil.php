<?php
include_once('Utilisateur.php');

class Profil {
    private $id;
    private $code;
    private $libelle;

    //ATTRIBUTS
        //ID
            /**
             * Get the value of id
             */ 
            public function getId() :int
            {
                return $this->id;
            }

            /**
             * Set the value of id
             *
             * @return  self
             */ 
            public function setId(int $id) :self
            {
                $this->id = $id;

                return $this;
            }
        
        //CODE
            /**
             * Get the value of code
             */ 
            public function getCode() : string
            {
                return $this->code;
            }

            /**
             * Set the value of code
             *
             * @return  self
             */ 
            public function setCode(string $code) : self
            {
                $this->code = $code;

                return $this;
            }

        //LIBELLE
            /**
             * Get the value of libelle
             */ 
            public function getLibelle() :string
            {
                return $this->libelle;
            }

            /**
             * Set the value of libelle
             *
             * @return  self
             */ 
            public function setLibelle(string $libelle) :self
            {
                $this->libelle = $libelle;

                return $this;
            }

        //METHODES
            //CONSTRUCT
            
        
            //AFFICHER
                public function __toString() :string
                {
                    return 
                    "\n [Id] : " . $this->id .
                    "\n [Code] : " . $this->code .
                    "\n [Libelle] : " . $this->libelle .
                    "\n ";
                }
}
?>