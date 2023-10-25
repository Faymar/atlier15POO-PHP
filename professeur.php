<?php
require('etudiant.php');

interface InterfaceProffesseur
{
    public function sePresenter();
    public function evaluerEtudiant($dateEval);
}

class Proffesseur extends Etudiant implements InterfaceProffesseur
{

    private $salaire;
    private $specialite;
    private $voiture = false;
    public function __construct($nom, $prenom, $matricule, $dateNaissance, $voiture, $salaire, $specialite)
    {
        parent::__construct($nom, $prenom, $matricule, $dateNaissance);
        $this->salaire = $salaire;
        $this->specialite = $specialite;
        $this->voiture = $voiture;
    }
    public function sePresenter()
    {
        echo "bojour je suis Etudiant Mon nom est " . parent::getNom() . " " . parent::getPrenom() . " matricule : " . parent::getMatricule() . "je suis $this->specialite et je gagne $this->salaire ";
        if ($this->voiture == true) {
            echo "j'ai une voiture";
        }
    }
    public function evaluerEtudiant($dateEval)
    {
        echo "je vais faire une evaluation le $dateEval";
    }
}

$etudiant1 = new Etudiant('Simplonier', 'Diof', 'smp334', '12/2?2010');
$etudiant1->sePresenter();

// public function __construct( $nom, $prenom, $matricule, $dateNaissance, $voiture, $salaire, $specialite)

$Proffesseur1 = new Proffesseur('Moussa', 'Basse', 'sm34', '12/2/1222', true, 4000000, 'dev');
$Proffesseur1->sePresenter();
