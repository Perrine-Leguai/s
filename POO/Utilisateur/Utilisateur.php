<?php

include_once('Personne.php');
include_once('Profil.php');

class Utilisateur extends Personne{
    private $login;
    private $password;
    private $service;
    private $profil;

    //LOGIN
        /**
         * Get the value of login
         */ 
        public function getLogin() :string
        {
            return $this->login;
        }

        /**
         * Set the value of login
         *
         * @return  self
         */ 
        public function setLogin(string $login) :self
        {
            $this->login = $login;

            return $this;
        }
    //MDP
        /**
         * Get the value of password
         */ 
        public function getPassword() :string
        {
            return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword(string $password) :self
        {
            $this->password = $password;

            return $this;
        }
    //SERVICE
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

    //PROFIL
        /**
         * Get the value of profil
         */ 
        public function getProfil() :Profil
        {
            return $this->profil;
        }

        /**
         * Set the value of profil
         *
         * @return  self
         */ 
        public function setProfil(Profil $profil) : self
        {
            $this->profil = $profil;

            return $this;
        }

// METHODES
                    
    //CONSTRUCT
            

    //CALCUL SALAIRE
        public function calculerSalaire() : float
        {

            if ($this->profil->getLibelle()=="MN"){      //quand on gere des attributs d'objets, on est obligé de passer par $this
               return $this->salaire*1.1;
            }
            elseif ($this->profil->getLibelle()=="DG"){
                return $this->salaire*1.4;
            }
            
            return $this->salaire;
        }


    //AFFICHER
        public function __toString() :string
        {
            return 
            "\n " . parent::__toString() .
            "\n [Login] : " . $this->login .
            "\n [Password] : " . $this->password .
            "\n [Service] : " . $this->service .
            "\n " . $this->profil;
        } 

        public function afficher() : void
                {
                    $this;
                } 

    
}
?>