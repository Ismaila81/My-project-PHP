<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mySql:dbname=visteurs;host=localhost';
$user = 'Tinkita@localhost';
$password = '';

$dbh = new PDO($dsn, $user, $password);

?>