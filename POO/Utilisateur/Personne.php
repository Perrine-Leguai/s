<?php

class Personne{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $telephone;
    protected $salaire;

    //ATTRIBUTS
        // ID
            /**
             * Get the value of id
             */ 
            public function getId() :int
            {
                return $this->id ;
            }

                            // /** EN AUTO INCREMENT ON LE SUPPRIME CAR LA MACHINE LE CREE LUI MM
                            // ON INDIQUE AU MOMENT DE LA CREATION DE LA BDD ET APRES ON ENREGISTRE COMME VALUES
                            // DANS INSERT INTO table VALUES (NULL|0, 'prenom', 'nom' ...)
                            //  * Set the value of id
                            //  *
                            //  * @return  self
                            //  */ 
                            public function setId(int $id) :self
                            {
                                $this->id = $id;

                                return $this;
                            }
        
            // NOM
            /**
             * Get the value of nom
             */ 
            public function getNom() :string
            {
                return $this->nom;
            }

            /**
             * Set the value of nom
             *
             * @return  self
             */ 
            public function setNom(string $nom) :self
            {
                $this->nom = $nom;

                return $this;
            }

        //PRENOM    
            /**
             * Get the value of prenom
             */ 
            public function getPrenom() :string
            {
                return $this->prenom;
            }

            /**
             * Set the value of prenom
             *
             * @return  self
             */ 
            public function setPrenom(string $prenom) :self
            {
                $this->prenom = $prenom;

                return $this;
            }

        //MAIL
            /**
             * Get the value of email
             */ 
            public function getEmail() :string
            {
                return $this->email;
            }

            /**
             * Set the value of email
             *
             * @return  self
             */ 
            public function setEmail(string $email) :self
            {
                $this->email = $email;

                return $this;
            }

        //TELEPHONE
            /**
             * Get the value of telephone
             */ 
            public function getTelephone() :string
            {
                return $this->telephone;
            }

            /**
             * Set the value of telephone
             *
             * @return  self
             */ 
            public function setTelephone(string $telephone) :self
            {
                $this->telephone = $telephone;

                return $this;
            }

        //SALAIRE
            /**
             * Get the value of salaire
             */ 
            public function getSalaire() :float
            {
                return $this->salaire;
            }

            /**
             * Set the value of salaire
             *
             * @return  self
             */ 
            public function setSalaire(int $salaire) :self
            {
                $this->salaire = $salaire;

                return $this;
            }

    // METHODES
            //CALCUL SALAIRE
                public function calculerSalaire() : float
                {
                    return $this->salaire;
                }
                 // abstract function calculerSalaire() : float
            
            //CONSTRUCT
               
            
            //AFFICHER

                public function afficher() : void
                {
                    echo "\n [ID] : " . $this->id .
                    "\n [Nom] : " . $this->nom .
                    "\n [Prenom] : " . $this->prenom .
                    "\n [Email] : " . $this->email .
                    "\n [Téléphone] : " . $this->telephone .
                    "\n [Salaire] : " . $this->salaire .
                    "\n ";
                } 


                public function __toString() : string
                {
                    return 
                    "\n [ID] : " . $this->id .
                    "\n [Nom] : " . $this->nom .
                    "\n [Prenom] : " . $this->prenom .
                    "\n [Email] : " . $this->email .
                    "\n [Téléphone] : " . $this->telephone .
                    "\n [Salaire] : " . $this->salaire .
                    "\n ";
                } 
}

?>