<?php
include_once 'Biblio.php';
$B=new Biblio();
$B->Ajouter(new Livre("ref001","Java","ALAMI",300));
$B->Ajouter(new Dictionnaire("ref002","Petit Robert",30000));
$B->Ajouter(new Livre("ref003","C++","Rasmus",500));
$B->Convert_titre_Maj();
$B->Modifier_titre("ref003","PHP");

$B->Afficher();
echo "<br>Le nombre de livres est ".$B->Nbr_Livres()."<br>";
echo "Les dictionnaires sont: <br>";
$B->Afficher_Dictionnaires();
echo "<br> ----------------- <br>";
$B->tousLesAuteurs();

echo "<br> Descriptions des documents <br>";

$B->toutesLesDescriptions();

?>