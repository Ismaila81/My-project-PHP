<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'Tinkita', 'Tinkita2025');
if(!$_SESSION['email'] ){
    header('location:connexion.php');
 }else{
    echo '<p style="text-align:center; color:green"> Vous êtes connectés  par l\'email'.' ' .$_SESSION['email'].'</p>';
    }
    ?>
    <?php
    
 if(isset($_GET['id']) AND !empty($_GET['id'])){
   // $smsid=$_POST['date_sms'];
$getid=$_GET['id'];
$recupuser=$bdd->prepare('SELECT * FROM eleve WHERE id= ?');
$recupuser->execute(array($getid));
if ($recupuser->rowCount()>0) {

if(isset($_POST['envoyer'])){
    $message=htmlspecialchars($_POST['message']);
    $inserermessages=$bdd->prepare('INSERT INTO messagerie(message, id_envoie, id_perçu) VALUES (?,?,?)');
    $inserermessages->execute(array($message, $getid, $_SESSION['id']));
 }
}else {
    echo ' Aucun utisateur trouvé';
}
}else{
    echo 'Aucun identifiant a été trouvé';
}


 ?>

 <!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>message privés</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<form method="post" action="" style="text-align:center">
<textarea name="message" id="message" cols="20" rows="5"></textarea>
<br/>
<input type="submit" name="envoyer" value="envoyer">
</form>
<section id="message">

<?php
$recupsms=$bdd->prepare('SELECT * FROM messagerie WHERE id_envoie = ? AND id_perçu = ? OR 
id_envoie = ? AND id_perçu = ?' );
$recupsms->execute(array($_SESSION['id'], $getid , $getid, $_SESSION['id']));
while($message = $recupsms->fetch()){
    if($message['id_envoie']==$_SESSION['id'] ){
        ?>
 <p style="margin-left:100px;color:white;text-align:center;
  background-color: red; width: 300px"> <?= $message['message'];?> </p>
 <?php
    }elseif($message['id_envoie']==$getid ){
        ?>
        <p style=" margin-left:100px;color:white;text-align:center;background-color: green;width: 300px"> <?= $message['message'];?> </p>
        <?php    
    }
}
?>
</section>
<script>
    //  setInterval('load_message()', 500);
    //   function load_message(){
        //   $('#message').load('messagerie.php');
    //   }
      </script>

      