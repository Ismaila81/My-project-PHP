<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$date_nassiance=$_POST['date_naissance'];
$niveau =$_POST['niveau'];
$lieu_naissance=$_POST['lieu_naissance'];
$sexe=$_POST['sexe'];
$password=$_POST['password'];


if (($nom <> "")  && ($prenom <> "") && ($email <> "") && ($date_nassiance <> "") && ($niveau <>"") && ($lieu_naissance <>"") && ($sexe <>"") && ($password <> "")){


// Vérification de la validité des informations
$bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'Tinkita', 'Tinkita2025');
    $req = $bdd->prepare('INSERT INTO eleve (nom, prenom, email, date_naissance, niveau, lieu_naissance, sexe, password) VALUES(?,?, ?,?,?,?,?, ?)');
    $req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'], $_POST['date_naissance'], $_POST['niveau'], 
    $_POST['lieu_naissance'],$_POST['sexe'], $password = password_hash($_POST['password'], PASSWORD_DEFAULT)));
    header('location:verification.php');
}else {
    header('location:inscription.php');
}
?>


</form>
</body>
</html>