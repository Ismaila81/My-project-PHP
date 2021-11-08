<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=csv_db 12;charset=utf8', 'Tinkita', 'Tinkita2025');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>