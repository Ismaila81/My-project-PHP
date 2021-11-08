<?php
$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $message=nl2br(htmlspecialchars($_POST['message']));
        $inserMessage = $bdd->prepare('INSERT INTO message (pseudo, message) VALUES(?, ?)');
       $inserMessage->execute(array($pseudo, $message));
    }else{
        echo "Veuillez completez tous les champs";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    
<form method="post" action="#" align=center>
pseudo<input type="text" name="pseudo"><br>
message<textarea name="message"></textarea><br>
<br>
<input type="submit" name="valider" value="valider">
<section id="message"></section>
</form>
<script>
    setInterval('load_message()', 500);
    function load_message(){
        $('#message').load('messagereçu.php');
    }
</script> 
</body>
</html>