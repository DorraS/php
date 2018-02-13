

/**
* Créer un script qui compte le nombre de voyelle
* dans la variable $sentence
*
*/

$sentence = "La formation simplon c'est genial, on va devenir des pros";
<?php

/**
* Créer un script qui compte le nombre de voyelle
* dans la variable
 $sentence= 'Créer un script qui compte le nombre de voyelle'
*
* 
* indice on peut parcourir une chaine avec for
* strlen()
* in_array()
 * 
*/
$voyelle = 'aeiuoy';
$sentence= 'Creer un script qui compte le nombre de voyelle';
$compteur=0;

for($i=0; $i<strlen($sentence);$i++){
	
	for($j=0;$j<strlen($voyelle);$j++){
		if($voyelle[$j]==$sentence[$i]){
			$compteur++;
		}
	}
}
echo 'nombre de voyelle '.$compteur;






/*
$compteur=0;
for( $i=0; $i < strlen($sentence);$i++){
	$char = $sentence[$i];
	
	if(strpos($voyelle,$char)!== false){
		$compteur++;
	}
}
echo  'voyelle count : ' .  $compteur . '<br>';
*/










?>
