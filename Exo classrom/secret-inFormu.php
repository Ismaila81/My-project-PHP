<p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
<p>  Il doit s'afficher en bas si vous connaissez le mot de passe</p>
<form   method="POST" action="secret-inFormu.php">
<label>Prenom</label> <input type="text" name=" prenom" placeholder="Votre Prénom:" id="">
<label>Vous êtes étudiant ?</label> <input type="checkbox" name=" travail"  /> <br>
<label>Choix</label><select name="choix">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
</select> <br>
<label>Mot de passe</label><input type="password" name="mot_de_passe" /><br>
<button class="submit" id="btn">Envoyer</button>
<form>
     <?php if (isset  ($_POST['travail'] )){
    echo 'Bonjour '. htmlspecialchars($_POST['prenom'] );
    echo "  Vous avez choisi le  ".  $_POST['choix'];
     echo " <p> Vous êtes alors un étudiant </p>";
    } else{
      echo "Désolé alors vous n'êtes pas éligible ! </p> ";
     };
 


// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "Tinkita2025")
{
 echo " <h1> Désolé encore , vous n'avez entré ou pas le bon mot de passe </h1>";	// Afficher le formulaire de saisie du mot de passe
}
// Le mot de passe a été envoyé et il est bon
else
{
   echo "<h1>Voici les codes d'accès :</h1>
   <h1><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></h1>   
        
<p> 
  ?>
Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />

   
   ";
	// Afficher les codes secrets
}

?>