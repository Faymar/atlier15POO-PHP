<?php

class Etudiant
{
    public $nom;
    private $prenom;
    private $matricule;
    public $dateNaissance;
    public function __construct($nom, $prenom, $matricule, $dateNaissance)
    {
        $regexnom = "/^[a-zA-Z]{2,255}$/";
        $regexmat = "/^[a-zA-Z0-9]{9}$/";
        $regexdate = "/^[0-9]{2}-[0-9]{2}-[0-9]{4}$/";
        if (!preg_match($regexnom, $nom)) {
            throw new Exception("Le nom est invalide");
        } else {
            $this->nom = $nom;
        }
        if (!preg_match($regexnom, $prenom)) {
            throw new Exception("le prenom est invalide");
        } else {
            $this->prenom = $prenom;
        }
        if (!preg_match($regexmat, $matricule)) {
            throw new Exception("le matricule est invalide");
        } else {
            $this->matricule = $matricule;
        }
        if (!preg_match($regexdate, $dateNaissance)) {
            throw new Exception("la date de naissace est invalide");
        } else {
            $this->dateNaissance = $dateNaissance;
        }
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function sePresenter()
    {
        echo "bojour je suis Etudiant Mon nom est $this->nom  $this->prenom
        matricule :$this->matricule 
        ma date de naissance est : $this->dateNaissance ";
    }
    public function faireCours()
    {
        echo "l' Etudiant $this->nom  $this->prenom fait cours";
    }
}