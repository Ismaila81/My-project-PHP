<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo'])){
        $recupusers = $bdd->prepare('SELECT * FROM message_privés WHERE pseudo = ?');
        $recupusers->execute(array($_POST['pseudo']));
        if($recupusers->rowCount()>0){
        $_SESSION['pseudo']=$_POST['pseudo'];
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de Connexion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>   
<form method="post" action="#" align=center>
pseudo<input type="text" name="pseudo"><br>
<br>
<input type="submit" name="valider" value="valider">
</form>
</body>
</html>
<input type="file" name="photo">