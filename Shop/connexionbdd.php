<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'Tinkita', 'Tinkita2025');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>