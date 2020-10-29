<?php
include_once 'Personne.php';

class Manager extends Personne{
    private $service;

    //ATTRIBUTS
        /**
         * Get the value of service
         */ 
        public function getService() :string
        {
            return $this->service;
        }

        /**
         * Set the value of service
         *
         * @return  self
         */ 
        public function setService(string $service) :self
        {
            $this->service = $service;

            return $this;
        }

    //METHODES
        public function afficher() : void
            {
                echo "\n [ID] : " . $this->id .
                "\n [Nom] : " . $this->nom .
                "\n [Prenom] : " . $this->prenom .
                "\n [Email] : " . $this->email .
                "\n [Téléphone] : " . $this->telephone .
                "\n [Salaire] : " . $this->salaire .
                "\n [Counter] : " . $this->counter .
                "\n [Service] : " . $this->service .
                "\n ";
                } 
        
        public function calculerSalaire() : float
            {
    
                return $this->salaire*1.35;
            }

        public function __construct() {
                parent::$counter++;
            }
            
        
        public function sePresenter() : string
            {
               return  "Le salaire du manager " . $this->nom . " " . $this->prenom . " est de " . $this->salaire*1.35 . " son service est : " . $this->service ;
            }
}
?>