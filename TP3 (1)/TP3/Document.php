<?php
class Document{
private $ref,$titre;

public  function __construct($ref,$titre)
{
$this->ref=$ref;
$this->titre=$titre;
}

public function getRef(){
    return $this->ref;
}

public function getTitre(){
    return $this->titre;
}

public function setRef($ref){
    $this->ref=$ref;
}

public function setTitre($titre){
    $this->titre=$titre;
}

public function Afficher(){
echo "Référence: ".$this->ref."<br>Titre: ".$this->titre."<br>";
}

function description(){
return "Référence: ".$this->ref."<br>Titre: ".$this->titre."<br>";

}
}
?>
