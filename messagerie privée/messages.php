<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');
if(!$_SESSION['pseudo']){
    header('location:connexion.php');
 }
 if(isset($_GET['id']) AND !empty($_GET['id'])){

$getid=$_GET['id'];
$recupuser=$bdd->prepare('SELECT * FROM message_privés WHERE id= ?');
$recupuser->execute(array($getid));
if ($recupuser->rowCount()>0) {

if(isset($_POST['envoyer'])){
    $message=htmlspecialchars($_POST['message']);
    $inserermessages=$bdd->prepare('INSERT INTO sms_reçus(message, id_destinataire, id_auteur) VALUES (?,?,?)');
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
<form method="post" action="">
<textarea name="message" id="message" cols="20" rows="5"></textarea>
<br/>
<input type="submit" name="envoyer" value="envoyer">
</form>
<section id="message">
<?php
$recupsms=$bdd->prepare('SELECT * FROM sms_reçus WHERE id_destinataire = ? AND id_auteur = ? OR 
id_destinataire = ? AND id_auteur = ?');
$recupsms->execute(array($_SESSION['id'], $getid , $getid, $_SESSION['id']));
while($message = $recupsms->fetch()){
    if($message['id_destinataire']==$_SESSION['id']){
        ?>
 <p style="color:green"> <?= $message['message'];?> </p>
 <?php
    }elseif($message['id_destinataire']==$getid){
        ?>
        <p style="color:red"> <?= $message['message'];?> </p>
        <?php    
    }
}
?>
</section>
<script>
    setInterval('load_message()', 500);
     function load_message(){
         $('messages.php').load('messages.php');
      }
</script> 
