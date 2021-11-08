<link rel="stylesheet" href="formu.css">
        

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO chat (pseudo, email, password) VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['email'], $_POST['password']));

// Redirection du visiteur vers la page du minichat
//header('Location: Ajout.php');
?>
       <?php
   // Connexion à la base de données
//try
//{
//	$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');
//}
//catch(Exception $e)
//{
 //      die('Erreur : '.$e->getMessage());
//}
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, email,password FROM chat');
   // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
   while ($donnees = $reponse->fetch()){
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> :
     ' . htmlspecialchars($donnees['email']) .''.htmlspecialchars($donnees['password']) .'</p>';
   }   
$reponse->closeCursor();
   ?>