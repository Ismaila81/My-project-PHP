<?php
function ajouter($image, $nom, $prix, $description){
	if(require("connexionbdd.php")){
$req = $bdd->prepare('INSERT INTO produits(image, nom, prix, description) VALUES($image,$nom, $prix, $description )');
$req->execute(array($image, $nom, $prix, $description));
$req->closeCursor();
	}
}

function affiche(){ 
if(require("connexionbdd.php")){
	$reponse = $bdd->query('SELECT * FROM produits ORDER BY ID DESC');
	$reponse->execute();
	$data=$reponse->fetchAll(PDO::FETCH_OBJ);
	return $data;
	//$reponse->closeCursor();
}
}

function supprimer($id){
	if(require("connexionbdd.php")){
	$sup=$reponse->prepare('DELETE  FROM produits WHERE id=?');
	$sup->execute(array($id));
	}
}
?>