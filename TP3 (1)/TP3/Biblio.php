<?php 
include_once 'Livre.php';
include_once 'Dictionnaire.php';
class Biblio{
private array $doc;

function Ajouter($d)
{
    $this->doc[]=$d;
}

function Afficher(){
foreach($this->doc as $d){
    $d->Afficher();
    echo "------------------------------<br>";
}
}

function Convert_titre_Maj()
{
  foreach($this->doc as $d){
    $d->setTitre(strtoupper($d->getTitre()));
}  

}

 // Modifier le titre d’un document ;

 function Modifier_titre($ref,$nouveau_titre)
 {
foreach($this->doc as $d)
    if($d->getRef()==$ref)
        $d->setTitre($nouveau_titre);
 }

// Calculer le nombre de livres ;
function Nbr_Livres()
{
$nbr=0;
foreach($this->doc as $d)
    if($d instanceof Livre)
        $nbr++;
return $nbr;
}

// Afficher que les dictionnaires ;
function Afficher_Dictionnaires()
{
foreach($this->doc as $d)
    if($d instanceof Dictionnaire)
       $d->Afficher();
}

// Afficher les auteurs des documents ;
function tousLesAuteurs()
{
foreach($this->doc as $d)
    {
        echo "Référence: ".$d->getRef()." / ";
       if($d instanceof Livre)
         echo "Auteur: ".$d->getAuteur()."<br>";
        echo "<br>";
    }
}

function  toutesLesDescriptions(){
foreach($this->doc as $d)
    echo $d->description();
}

}
?>
