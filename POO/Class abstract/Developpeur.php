<?php
include_once 'Personne.php';

class Developpeur extends Personne{
    private $specialite;
    

    //ATTRIBUTS
        /**
         * Get the value of specialite
         */ 
        public function getSpecialite() : string
        {
            return $this->specialite;
        }

        /**
         * Set the value of specialite
         *
         * @return  self
         */ 
        public function setSpecialite(string $specialite) :self
        {
            $this->specialite = $specialite;

            return $this;
        }

    //METHODES
        public function afficher() : string
            {
                return "\n [ID] : " . $this->id .
                "\n [Nom] : " . $this->nom .
                "\n [Prenom] : " . $this->prenom .
                "\n [Email] : " . $this->email .
                "\n [Téléphone] : " . $this->telephone .
                "\n [Salaire] : " . $this->salaire .
                "\n [Counter] : " . $this->counter .
                "\n [Specialite] : " . $this->specialite .
                "\n ";
                } 

        public function calculerSalaire() : float
            {
    
                return $this->salaire*1.20;
            }
        
        public function __construct() {
               parent::$counter++;
            }
        
        public function sePresenter() :string
        {
            return "Le salaire du développer " . $this->nom . " " . $this->prenom . " est de " . $this->salaire*1.2 . " sa specialité est : " . $this->specialite ;
        }
}