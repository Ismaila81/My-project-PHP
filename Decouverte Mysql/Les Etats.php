Les Etas par odre croissants
<?php
 include('Bdd.php');
$recupnoms = $bdd->query('SELECT * FROM mock_data ORDER BY COL_8 ASC ');

  while ($noms = $recupnoms->fetch())
  {
   ?>
    </style>

        <table>
    <tr>
        <td><?php echo $noms['COL_1'] ?>
        <?php //echo $noms['COL_3'] ?> </td>
        <td><?php echo $noms['COL_8'] ?> </td>


  </tr>
    </table>
  
  
    <?php  
}
$recupnoms->closeCursor(); // Termine le traitement de la requête

 
?>
    <style>
 table
{
    border:2px;
    
     /* Les bordures du tableau seront collées (plus joli) */
}
td
{
    border: 1px solid black;
    width: 100px;
}
    </style>