<?php
setcookie('prenom' , time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('travail', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...

// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>

</p>
<p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
<form   method="POST" action="Membre.php">
<label>Prenom</label> <input type="text" name=" prenom" placeholder="Votre Prénom:" id="prenom" /> <br>
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