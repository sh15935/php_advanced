<?php
include_once 'Document.php';
class Dictionnaire extends Document{
private $nbr_def_mots;

public  function __construct($ref,$titre,$nbr_def_mots)
{
parent::__construct($ref,$titre);
$this->nbr_def_mots=$nbr_def_mots;
}


public function getNbr_def_mots(){
    return $this->nbr_def_mots;
}


public function setNbr_def_mots($nbr_def_mots){
    $this->nbr_def_mots=$nbr_def_mots;
}

public function Afficher(){
parent::Afficher();
echo "Nbr Définitions de mots:".$this->nbr_def_mots."<br>";
}

public function description(){
return parent::description(). "Nbr Définitions de mots:".$this->nbr_def_mots."<br>";
}
}
?>

