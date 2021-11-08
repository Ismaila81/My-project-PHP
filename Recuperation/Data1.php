
<h1>  Récuperation des données sur une base</h1>

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
  $reponse = $bdd->query('SELECT * FROM visiteurs');

// On affiche chaque entrée une à une
  while ($donnees = $reponse->fetch())
  {
   ?>
    <p>
    <strong>N°</strong> : <?php echo $donnees['id']; ?><br />
    <strong>Nom</strong> : <?php echo $donnees['pseudo']; ?><br />
    Votre email est: <?php echo $donnees['email']; ?>, et vous habitez à  <?php echo $donnees['ville']; ?><br />

   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
