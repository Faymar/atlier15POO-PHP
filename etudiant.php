<?php

class Etudiant
{
    public $nom;
    private $prenom;
    private $matricule;
    public $dateNaissance;
    public function __construct($nom, $prenom, $matricule, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->dateNaissance = $dateNaissance;
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
        echo "bojour je suis Etudiant Mon nom est $this->nom  $this->prenom ; matricule : $this->matricule ma date de naissance est : $this->dateNaissance ";
    }
    public function faireCours()
    {
        echo "l' Etudiant $this->nom  $this->prenom fait cours";
    }
}
