<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'Tinkita', 'Tinkita2025');

if(!$_SESSION['email']){
    header('location:connexion.php');
}else{
echo '<p style="text-align:center; color:green"> Vous êtes connectés  par l\'email'.' ' .$_SESSION['email'].'</p>';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="inscript.css">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Espace utilsateurs et amis</title>
   
</head>
<H3>Les membres inscris sur notre plateforme</H3>
<section class="users">
<?php
    $recupusers = $bdd->query('SELECT * FROM eleve');
  while($users=$recupusers->fetch()) {
      ?>
      <a href="messagerie.php?id=<?php echo $users['id']; ?>">
          <p><?php echo $users['nom'];?>
          <?php echo $users['prenom'];?></p></a>
         <p> <?php echo $users['email'];?></p>
         <p> <?php echo $users['date_naissance'];?></p>
         <p> <?php echo $users['sexe'];?></p>
         <p> <?php echo $users['lieu_naissance'];?></p>
         <p> <?php echo 'Date d\'inscription <br>'. $users['date_incription'];?></p>
        
<?php
  }
?>
</section>
<style>
section{
padding-left: 50px;
margin-left: 40px;
width: 210px;
border-radius: 50px;
background-color: rgb(255, 0, 200);
color: white;


}
</style>