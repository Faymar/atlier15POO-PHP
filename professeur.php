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
        $regexsp = "/^[a-zA-Z]{2,255}$/";
        $regexsalaire = "/^[0-9]{7}$/";
        parent::__construct($nom, $prenom, $matricule, $dateNaissance);

        if (!preg_match($regexsalaire, $salaire)) {
            throw new Exception("Le salaire est invalide");
        } else {
            $this->salaire = $salaire;
        }
        if (!preg_match($regexsp, $salaire)) {
            throw new Exception("Le specialite est invalide");
        } else {
            $this->specialite = $specialite;
        }
        if (!is_bool($voiture)) {
            throw new Exception("La voiture est invalide");
        } else {
            $this->voiture = $voiture;
        }
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
