

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscript.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <div id="erreur" style="color: red;"></div>
    <div id="pageRetro">
       
    <form action="index.php" method="post" id="inscription">
    <button type="submit" name=" compte"id="btn"><a href='verification.php'> Se connecter<a></button>
    <h3 style="background-color: red"> Formulaire d'inscription</h3>
  <input type="text" name="nom" id="nom" placeholder="Nom:" > <br>
  <input type="text" name="prenom" id="prenom" placeholder="Prenom:" > <br>
   <input type="email" name="email" id="email" placeholder="Couriel:" > <br>
   <input type="datetime" name="date_naissance" id="" placeholder="01/01/1900"> <br>
   <input type="text" name="niveau" id="" placeholder="6 jusqu'à 13"> <br>
   <input type="text" name="lieu_naissance" id="" placeholder=" lieu de naissance:" > <br>
   <input type="text" name="sexe" id="" placeholder=" Homme ou Femme"> <br>
  <input type="password" name="password" id="password" placeholder="Mot de passe:" > 
  <button type="submit" name=" compte"id="btn">S'inscrire</button>

  </form>
  </div>