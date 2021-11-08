<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');

if(!$_SESSION['pseudo']){
    header('location:connexion.php');
}

   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Espace utilsateurs</title>
   
</head>
<?php
    $recupusers = $bdd->query('SELECT * FROM message_privés');
  while($users=$recupusers->fetch()) {
      ?>
      <a href="messages.php?id=<?php echo $users['id']; ?>">
          <p><?php echo $users['pseudo'];?></p>
        </a>
<?php
  }


?>