<h3>Exo 1</h3> 
<p> Les variables valides sont: $a, $_a; $AAAA, $a1</p>
<p>  Les variables invalides: $1a, $a! </p>
<h3>Exo 2</h3>
<?php
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
//    $moyenne = ((15+12+9)/3);
   $moyenne=(($note_francais+$note_histoire_geo+$note_maths)/3);
   echo 'La moyenne est de '.$moyenne.' / 20.';
?>

<h3>Exo 3</h3> 
<p>  Calculer le prix TTC du produit </p>
<?php
$prix_ht=50;
$tva=20;
$prix_ttc=$prix_ht*(1+$tva/100);
echo 'Le prix TTC du produit est : '.$prix_ttc;
// prix hors taxes
// toutes taxes comprises
?>
<h3>Exo 4</h3> 
<?php
$test= '42';
  var_dump($test);
//  $exp="C:\wamp64\www\Affichage des données\exo2\Exo2.php:26:int";
//  echo strlen($exp);
?>
<h3>Exo 5</h3> 
<?php
$sexe= "Homme";
if($sexe=='Homme'){
    echo 'Je suis un homme';
}else {
echo 'vous êtes une femme';
}
?>
<h3>Exo 6</h3> 
<?php
$budget=1553.89 .'£';
$achats=1554.76 .'£';
if($budget>=$achats){
    echo' C\'est possible';
}
    else{
        echo'<p style=color:red> C\'est impossible  de payer les achats  </p>';
    }

?>
<h3>Exo 7</h3> 
<?php
$age=7;
if($age<18){
    echo 'Cette personne est majeure';
}else{
    echo 'Cette personne est mineure';
}
?>
<h3>Exo 8</h3> 
<?php
$heures=8;
if($heures >=5 && 11>=$heures){
    echo " Nos somme au Matin";
}
 elseif ($heures >=12 && 19>=$heures) {
     echo' Nous sommes à l\'après Midi';
}else{
echo 'Nous sommes la nuit';
}
?>
<h3>Exo 9</h3> 
<?php 
    $numb=5;
for ($i=1; $i <= 10; $i++) { 
    echo $numb.'*'.$i.'='. ($i*5)."</br>";
}
?>