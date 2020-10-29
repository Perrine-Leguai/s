<?php

include_once('Personne.php');
include_once('Utilisateur.php');
include_once('Profil.php');


//PERSONNES
    $pers1 = new Personne();
    $pers1->setId(101)->setNom("Durand")->setPrenom("Joséphine")->setEmail('direction@compagnie.com')->setTelephone('0380818283')->setSalaire(5432.10);

    $pers2 = new Personne();
    $pers2->setId(102)->setNom("Frontini")->setPrenom("Marc")->setEmail('drh@compagnie.com')->setTelephone('0380797877')->setSalaire(4321.09);

    $pers3 = new Personne();
    $pers3->setId(103)->setNom("Karamoko")->setPrenom("Kevin")->setEmail('dp@compagnie.com')->setTelephone('0380545556')->setSalaire(3210.98);

    $pers4 = new Personne();
    $pers4->setId(104)->setNom("Siñare")->setPrenom("Carolina")->setEmail('manager@compagnie.com')->setTelephone('0380999897')->setSalaire(2109.87);

    $pers5 = new Personne();
    $pers5->setId(105)->setNom("Bingale")->setPrenom("Jean")->setEmail('cp@comapgnie.com')->setTelephone('0380454647')->setSalaire(1098.76);

//PROFILS
    $profil1= new Profil();
    $profil1->setId(1)->setCode(14)->setLibelle('DG');

    $profil2= new Profil();
    $profil2->setId(2)->setCode(24)->setLibelle('DRH');

    $profil3= new Profil();
    $profil3->setId(3)->setCode(34)->setLibelle('DP');

    $profil4= new Profil();
    $profil4->setId(4)->setCode(44)->setLibelle('MN');

    $profil5= new Profil();
    $profil5->setId(5)->setCode(54)->setLibelle('CP');

//UTILISATEURS
    $ut1 = new Utilisateur();
    $ut1->setProfil($profil1)->setId($pers5->getId())->setNom($pers5->getNom())->setPrenom($pers5->getPrenom())->setEmail($pers5->getEmail())->setTelephone($pers5->getTelephone())->setSalaire($pers5->getSalaire())->setLogin("159487MPL")->setPassword('15948PM')->setService('Informatique');

    $ut2 = new Utilisateur();
    $ut2->setProfil($profil2)->setId($pers4->getId())->setNom($pers4->getNom())->setPrenom($pers4->getPrenom())->setEmail($pers4->getEmail())->setTelephone($pers4->getTelephone())->setSalaire($pers4->getSalaire())->setLogin("326159OKI")->setPassword('32615OK')->setService('Informatique');

    $ut3 = new Utilisateur();
    $ut3->setProfil($profil3)->setId($pers3->getId())->setNom($pers3->getNom())->setPrenom($pers3->getPrenom())->setEmail($pers3->getEmail())->setTelephone($pers3->getTelephone())->setSalaire($pers3->getSalaire())->setLogin("357241JUH")->setPassword('35724JU')->setService('Informatique');

    $ut4 = new Utilisateur();
    $ut4->setProfil($profil4)->setId($pers2->getId())->setNom($pers2->getNom())->setPrenom($pers2->getPrenom())->setEmail($pers2->getEmail())->setTelephone($pers2->getTelephone())->setSalaire($pers2->getSalaire())->setLogin("142753JNH")->setPassword('14275JN')->setService('Informatique');

    $ut5 = new Utilisateur();
    $ut5->setProfil($profil5)->setId($pers1->getId())->setNom($pers1->getNom())->setPrenom($pers1->getPrenom())->setEmail($pers1->getEmail())->setTelephone($pers1->getTelephone())->setSalaire($pers1->getSalaire())->setLogin("748159GVF")->setPassword('74815GV')->setService('Informatique');

    echo $ut1 . "\n" . $ut2 . "\n" . $ut3 . "\n" . $ut4 . "\n" . $ut5 ;

    echo $ut4->calculerSalaire();
    

?>