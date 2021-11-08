<h3>Les ages de chaque personne:</h3>

<?php
 include('Bdd.php');
$recupnoms = $bdd->query('SELECT * FROM mock_data');

  while ($noms = $recupnoms->fetch())
  {
   ?>
    </style>

        <table>
    <tr>
        <td><?php echo $noms['COL_2'] ?>
        <?php echo $noms['COL_3'] ?> </td>
        <td><?php echo $noms['COL_7'] ?> </td>
  </tr>
  
   <style>
table{
   border:1px;
   
    /* Les bordures du tableau seront collées (plus joli) */
}
td
{
   border: 2px solid black;
   width: 100px;
} </style>
    </table>
  
  
    <?php  
}

$recupnoms->closeCursor(); // Termine le traitement de la requête

 
?>