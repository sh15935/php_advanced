<?php 
class Connexion {
private $cnx;
public function __construct(){
$contenu=file(__DIR__."\.env");

$param1=trim(explode(":",$contenu[0])[1]);
$param2=trim(explode(":",$contenu[1])[1]);
$param3=trim(explode(":",$contenu[2])[1]);
$param4=trim(explode(":",$contenu[3])[1]);
$DSN="mysql:host=".$param1.";db_name=".$param4;
$this->cnx=new PDO($DSN,$param2,$param3);
} 
} 
?>