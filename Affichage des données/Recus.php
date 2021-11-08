
<?php

$pseudo=$_POST['pseudo'];
$email =$_POST['email'];
$password=$_POST['password'];
$message=$_POST['message'];



if (($pseudo <> "")  && ($password <> "") && ($message <> "")){
    echo "Votre nom est: ". htmlspecialchars($_POST['pseudo']) .
    '<br> Votre email est : ' .htmlspecialchars($_POST['email'] ).
     ' <br> Votre message est :'.htmlspecialchars($_POST['message']) ;
  exit;

 } else{
   //echo " error";
 
   header('Location: exo1.php');
   exit;  }  

// if (preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/igm', $email)) {
// 
// 
// 
// ?>
