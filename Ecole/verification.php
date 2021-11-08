<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'Tinkita', 'Tinkita2025');
if(isset($_POST['valider'])){
    if(!empty($_POST['email'] && !empty($_POST['password']) )){
        $recupusers = $bdd->prepare('SELECT * FROM eleve WHERE email = ?');
        $recupusers = $bdd->prepare('SELECT * FROM eleve WHERE password = ?');
        $recupusers->execute(array($_POST['email']));
        $recupusers->execute(array($_POST['password']));
        if($recupusers->rowCount()>0){
        $_SESSION['email']=$_POST['email'];
        $_SESSION['nom']=$_POST['nom'];
        $_SESSION['prenom']=$_POST['prenom'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['id']=$recupusers->fetch()['id'];
        header('location:Accueil.php');
        }else{
            echo 'Aucun utilsateur trouvé';
        }

    }else{
        echo "Veuillez completer votre nom";
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscript.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de Connexion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div id="erreur" style="color: red;"></div>
 <div id="pageRetro">
    
 <form action="" method="post" id="inscription">
 <h3> Connexion</h3>
<input type="email" name="email" id="email" placeholder="Couriel:" > <br>
<input type="password" name="password" id="password" placeholder="Mot de passe:" > 
<br>
<br>
<input type="submit" name="valider" value="valider">
</form>
</body>
</html>