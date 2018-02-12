<?php
/**
* Inserer le tableau $insert dans $number aprés le 3eme element
* puis afficher le resultat
* 
* Info : pour afficher un tableau utiliser la fonction var_dump()
* http://php.net/manual/fr/ref.array.php
*/


$number = [1,2,3,4];
$insert = ["A","B","C"];
$resultat= array_merge($number,$insert);
var_dump ($resultat);
?>
