<?php
include('Bdd.php');
echo '<h3> Le nombre de Femmes et d\'Hommes:</h3>';
$recupnoms= $bdd->query('SELECT COUNT(COL_5) FROM mock_data WHERE COL_5= \'Male\'' );
$nombreH = $recupnoms->fetch();
echo 'Les hommes sont aux nombres de: '.$nombreH['COUNT(COL_5)'].'<br>';


$recupnoms->closeCursor();
?>

<?php
$recupnoms= $bdd->query('SELECT COUNT(COL_5) FROM mock_data WHERE COL_5= \'Female\'' );
$nombreH = $recupnoms->fetch();
echo 'Les Femmes sont aux nombres de: '.$nombreH['COUNT(COL_5)'];


$recupnoms->closeCursor();
?>
