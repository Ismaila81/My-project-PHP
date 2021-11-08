<?php
echo "<h1>Base de données </h1>";
?>



<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'Tinkita', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
  $reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
  while ($donnees = $reponse->fetch())
  {
   ?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
    Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
    <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>




<?php
echo '<h1> Base de visiteurs </h1> ';
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'Tinkita', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM visiteurs');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>visiteur</strong> : <?php echo $donnees['id']; ?><br />
    Mon nom est : <?php echo $donnees['pseudo']; ?> <br />
    Mon email est : <?php echo $donnees['email']; ?> <br />
     J'habite à :<?php echo $donnees['ville']; ?> <br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

<?php
echo '<h1> Base de vendeurs, seulement leurs nom </h1> ';
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'Tinkita', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

?>

<?php
echo '<h1> Base de vendeurs, seulement nom d\'un seul membre </h1> ';
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'Tinkita', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . '<br />';
}

$reponse->closeCursor();

?>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'Tinkita', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 0, 10');

echo '<h1>Voici les 10 premières entrées de la table jeux_video :</h1>';
while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

?>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'Tinkita', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
