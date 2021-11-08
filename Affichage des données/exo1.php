<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="formu.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire exo 3</title>
</head>
<body>
    <div id="erreur" style="color: red;"></div>
    <div id="pageRetro">
       
    <form action="Recus.php" method="post" id="inscription">
    <h2>Formulaire</h2>
    
  <input type="text" name="pseudo" id="prenom" placeholder="Nom:" > <br>
   <input type="email" name="email" id="email" placeholder="Couriel:" > <br>
  <input type="password" name="password" id="password" placeholder="Mot de passe:" > <br>
  <textarea name="message" id="" cols="30" rows="10" placeholder=" votre messange"></textarea><br>
  <button type="submit" id="btn">Créer un compte</button>
  </form>
  </div>