<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="bootstrap.css">
    <link href="bootstrap.js">
    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrateur</title>
</head>
<body>
<section class="container d-flex justify-content-between  align-items-center">
<div class="row bg-success">
<div class="col-md-10  align-items-center">
<p>Pour ajouter des produits , merci de remplir ce formulaire ci-dessous</p>
<form   method="POST" action="">
<label>Prenom</label> <input type="text" name=" prenom" placeholder="Votre Prénom:" id=""><br>
<label>Mot de passe</label><input type="password" name="mot_de_passe" /><br>
<button class="col-md-6" type="submit" id="btn" name="suivant">suivant</button>
<form>

</div>
</div>

</section>

<?php
if(isset($_POST['suivant'])){
if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "Tinkita2025" OR
!isset($_POST['prenom']) OR $_POST['prenom'] != "ISMAILA_B_I_T")  
{
 header('Location:Shop.php');
}else
{
	header('Location:ajouPro.php');
}
}
?>
</body>
</html>