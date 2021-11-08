<h3>1- Les noms de tous les apprenants</h3>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dream-tech;charset=utf8', 'Tinkita', 'Tinkita2025');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$recupnoms = $bdd->query('SELECT * FROM apprenants');

  while ($noms = $recupnoms->fetch())
  {
   ?>
    <p>
     <strong> <?php echo $noms['prenom'].'    '. $noms['nom'].'<br> </strong>' ?> 
  </p>
  
    <?php
    
    
}

$recupnoms->closeCursor(); // Termine le traitement de la requête


?>


<?php
  echo '<h3>2- Lister les âges apprenants</h3>';
$recupnoms = $bdd->query('SELECT * FROM apprenants');
while ($noms = $recupnoms->fetch())
{

  echo $noms['age'].'<br>';
 }

?>
<?php
  echo '<h3>3-Les domaines des apprenants</h3>';
$recupnoms = $bdd->query('SELECT * FROM apprenants');
while ($noms = $recupnoms->fetch())
{

  echo $noms['domaine'].'<br>';
 }

?>


<?php
  echo '<h3>4- Les apprenants qui habitent à Dakar sont:</h3>';
$recupnoms = $bdd->query('SELECT nom,prenom FROM apprenants WHERE region=\'Dakar\'');
while ($noms = $recupnoms->fetch())
 {

  echo $noms['prenom'].' '.$noms['nom'].'<br>';
 }
 ?>

 <?php
 echo '<h3>5- Les apprenants qui habitent à Dakar, St-Luis et Thies sont:</h3>';
 
$recupnoms = $bdd->query('SELECT nom,prenom , region FROM apprenants WHERE region=\'Dakar\' or 
region=\'Thies\' or region=\'St-Luis\'');
while ($noms = $recupnoms->fetch()) {
 echo $noms['prenom'].' '.$noms['nom'].'<br>';
}
?>

<?php
echo '<h3>6- Les apprenants ayant l\'âge > à 24 ans sont:</h3>';
 
$recupnoms = $bdd->query('SELECT nom,prenom , age FROM apprenants WHERE age >\'24\'');
while ($noms = $recupnoms->fetch()) {
echo $noms['prenom'].' '.$noms['nom'].'  a '.$noms['age'].' ans <br>';
}
?>
<?php
echo '<h3> 7- Les apprenants dont les noms commencent par M sont:</h3>';
$recupnoms = $bdd->query('SELECT * FROM apprenants WHERE prenom LIKE "m%" ');
while ($noms = $recupnoms->fetch()) { 
      echo $noms['prenom'].' '.$noms['nom'].'<br>';
}

?>


<?php
echo '<h3>8- Les apprenants ayant une moyenne entre 14 et 20 sont:</h3>';
//$recupnoms = $bdd->query("SELECT nom,prenom , moyenne FROM apprenants WHERE moyenne BETWEEN '14' AND '20'");
$recupnoms = $bdd->query('SELECT nom,prenom , moyenne FROM apprenants WHERE moyenne>=\'14\' or moyenne=\'20\'');
while ($noms = $recupnoms->fetch()) {
echo $noms['prenom'].' '.$noms['nom'].' ='.$noms['moyenne'].' <br>';
}
?>
<?php
echo '<h3>9- Calcule la somme des moyennes des apprenants:</h3>';
$recupnoms= $bdd->query('SELECT sum(moyenne) AS moyenne FROM apprenants');
 
$moyenne = $recupnoms->fetch();
echo $moyenne['moyenne'];
 
$recupnoms->closeCursor();
 
?>
<?php
echo '<h3>10- Les apprenants ayant une moyenne supérieure à 16 et dont l\'âge est moins de 20 sont </h3>';
 
$recupnoms = $bdd->query('SELECT nom,prenom ,age, moyenne FROM apprenants WHERE moyenne>\'16\' AND age<\'20\'');
while ($noms = $recupnoms->fetch()) {
echo $noms['prenom'].' '.$noms['nom'].' ='.$noms['moyenne'].' agée de '.$noms['age'].' <br>';
}
