
< !DOCTYPE HTML >  
< html >
< head >
< /head >
< body >  

<?php
// définit les variables et définit des valeurs vides
$name = $email = $gender = $comment = $website = "" ;

if ( $_SERVER [ "REQUEST_METHOD" ] == "POST" ) {
  $name = test_input( $_POST [ "name" ]);
  $email = test_input( $_POST [ "email" ]);
]);
  $commentaire = test_input( $_POST [ "commentaire" ]);
  $gender = test_input( $_POST [ "sexe" ]);
}

fonction test_input($données) {
  $données = trim($données);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  renvoie $données ;
}
?>

< h2 > Exemple de validation de formulaire PHP < /h2 >
< méthode de formulaire ="post" action =" <?php echo htmlspecialchars( $_SERVER [ "PHP_SELF" ]); ?> " >  
  Nom :<inputtype ="text" name ="name" >
  <br><br>
  E-mail :<inputtype ="text" name ="email" >
  <br><br>
  Site Web :<type d'entrée ="texte" nom ="site Web" >
  <br><br>
  Commentaire :<rows ="5" cols ="40" > < /textarea >
  < br > < br >
  Sexe :
   < input type ="radio" name ="gender" value ="female" > Female
   < input type ="radio" name ="sexe" valeur ="homme" > Homme
   < type d' entrée ="radio" nom ="genre" valeur ="autre"> Autre
   < br > <br >
  < input type ="submit" name ="submit" value ="Submit" >  
< /form >

<?php
echo "<h2>Votre entrée :</h2>" ;
echo $nom;
echo "<br>" ;
echo $email ;
echo "<br>" ;
echo $site Web ;
echo "<br>" ;
echo $commentaire;
echo "<br>" ;
echo $genre;
?>