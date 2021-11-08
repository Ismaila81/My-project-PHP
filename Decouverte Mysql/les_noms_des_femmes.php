<h3>2 - les noms des femmes:</h3>

<?php
 include('Bdd.php');
$recupnoms = $bdd->query('SELECT * FROM mock_data WHERE COL_5=\'Female\'');

  while ($noms = $recupnoms->fetch())
  {
   ?>
    </style>

        <table>
    <tr>
        <td><?php echo $noms['COL_2'] ?>
        <?php echo $noms['COL_3'] ?> </td>
        <td><?php echo $noms['COL_4'] ?> </td>
        <td style="color: red;"><?php echo $noms['COL_5'] ?> </td>
     <td><?php echo $noms['COL_6'] ?> </td>
<td><?php echo $noms['COL_7'] ?> </td>
<td><?php echo $noms['COL_8'] ?> </td>
<td><?php echo $noms['COL_9'] ?> </td>
  </tr>
  
   <style>
table{
   border:3px;
   
    /* Les bordures du tableau seront collées (plus joli) */
}
td
{
   border: 3px solid black;
   width: 100px;
} </style>
    </table>
  
  
    <?php  
}

$recupnoms->closeCursor(); // Termine le traitement de la requête

 
?>