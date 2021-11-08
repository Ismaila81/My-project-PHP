<h1>Exercice 11</h1>
<?php
   for($i = 1;$i <= 5;$i++) {
      for($numero = 1;$numero <= $i;$numero++) {
         echo $i;
      }
      echo '<br />';
   }
?>
<h1>Exercice: 12 </h1><br>
<?php
   $nom = 0;
   while($nom <= 20) {
      if($nom== 10) {
         echo '<strong>'.$nom.'</strong>';	  
      } else {
         echo $nom;
      }
      echo '<br />';
      $nom = $nom + 2;
   }
?>
<br>
<h1>Exercice 13</h1> <br>

<?php
$pays = array( 'France:Paris','Allemagne:Berlin', 'Italie :Rome' );

foreach( $pays as $value ) 
echo $value . '<br >';
?>

<h1>Exercice 14 </h1><br>
<?php
   $tableau = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 50);
      $i++;	  
   }
   if(in_array(42, $tableau)){ 
      echo 'Le nombre 42 est bien dans le tableau.';
   } else{ 
      echo 'Le tableau ne contient pas la valeur 42.';
    }
  // echo '<br />';  
   var_dump($tableau);
 
?>
<h1>Exercice 15</h1> <br>
<?php

   $tableau1 = array();
   $tableau2 = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 100);
      $i++;	  
    }
   foreach($tableau as $tabl1) {
      if($tabl1 < 50) {
          $tableau1[] = $tabl1;
      } else {
          $tableau2[] = $tabl1;		  
       }
    }
    
    echo 'Tableau 1 : ';
    foreach($tableau1 as $tabl1) {
      // echo $tabl1.' ';
    }
    
    echo '<br />Tableau 2 : ';
   foreach($tableau2 as $tabl2) {
       echo $tabl2.' ';

   }
 ?>


<h1> Exercice 16</h1>
<?php
   $pays_population = array(
      'France' => 67595000,
      'Suede' => 9998000,
      'Suisse' => 8417000,
      'Kosovo' => 1820631,
      'Malte' => 434403,
      'Mexique' => 122273500,
      'Allemagne' => 82800000,
   );
   echo '<p>Les pays suivants ont une population supérieure à 20 millions d\'habitants.</p>';
   foreach($pays_population as $pays => $population) {
      if($population >= 20000000) {
	     echo '-'.$pays.'<br>';
      }
   }
   
?>
<h1> Exercice 17</h1>
<?php
   $pays_population = array(
      'France' => 67595000,
      'Suede' => 9998000,
      'Suisse' => 8417000,
      'Kosovo' => 1820631,
      'Malte' => 434403,
      'Mexique' => 122273500,
      'Allemagne' => 82800000,
   );
   
   echo 'Il y a '.count($pays_population).' éléments dans le tableau.';
?>
<h1> Exercice 18</h1>
<?php
   $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
   echo $cocktails[1];
?>
<h1> Exercice 19</h1>
<?php
   $personnes = array(
      'Jean' => 16,
      'Manuel' => 19,
      'André' => 66
   );
   echo 'Manuel a '. $personnes['Manuel'].' ans';
?>
   













<?php
// for ($i = 1; $i <= 10; $i++)
// {
    // Echo 'Table de multiplication de '.$i.'<br>';
    // for ($j = 1; $j <= 10; $j++)
    // {
        // echo $i.' x '.$j.' = '.$i*$j.'<br>';
    // }
// }
?>