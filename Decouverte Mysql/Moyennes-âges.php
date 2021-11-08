<h3> La moyenne des ages:</h3>

<?php
 include('Bdd.php');
$recupnoms = $bdd->query('SELECT COL_7 FROM mock_data WHERE COL_5=\'Male\' ');

  while ($noms = $recupnoms->fetch())
    echo $noms['COL_7'] .'<br>';

$recupnoms->closeCursor(); // Termine le traitement de la requête

 
?>