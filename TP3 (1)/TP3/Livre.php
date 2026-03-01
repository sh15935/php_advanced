<?php
include_once 'Document.php';
class Livre extends Document{
private $auteur,$nbr_pages;

public  function __construct($ref,$titre,$auteur,$nbr_pages)
{
parent::__construct($ref,$titre);
$this->auteur=$auteur;
$this->nbr_pages=$nbr_pages;
}

public function getAuteur(){
    return $this->auteur;
}

public function getNbr_pages(){
    return $this->nbr_pages;
}

public function setAuteur($auteur){
    $this->auteur=$auteur;
}

public function setNbr_pages($nbr_pages){
    $this->nbr_pages=$nbr_pages;
}

public function Afficher(){
parent::Afficher();
echo "Auteur: ".$this->auteur."<br>Nbr pages: ".$this->nbr_pages."<br>";
}

public function description(){
return parent::description()."Auteur: ".$this->auteur."<br>Nbr pages: ".$this->nbr_pages."<br>";
}
}
?>

