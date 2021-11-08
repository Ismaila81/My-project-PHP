<?php
session_start();
require("commandes.php");
$produits=affiche();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>MyShop</title>
    <link href="bootstrap.css">
    <link href="bootstrap.js">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
<section class="container d-flex justify-content-between  align-items-center">
<div class="row bg-success">
<div class=" align-items-center">
<h1>Merci d'ajouter des produits</h1>
<form   method="POST" action="verifi.php">
<label>Image du produits</label> <input type="file" name="image" placeholder="image:" id=""><br>
<label>Nom du produits</label> <input type="text" name="nom" placeholder="Nom du produits:" id=""><br>
<label>Prix</label> <input type="number" name="prix" placeholder="prix produit:" id=""><br>
<label>Description</label> <textarea colspan="7"  rows="8" name="description" placeholder="Decrivez votre produits"></textarea>

<button class="col-md-6" type="submit" id="btn" name="Ajouter">Ajouter</button>
<form>

</div>
</div>

</section>
<br>
<hr>
<section class="container d-flex justify-content-between  align-items-center">
<div class="row bg-success">
<div class=" align-items-center">
<h1>Voulez vous supprimer des produits</h1>
<form   method="POST" action="verifi.php">
<label>Identifiant du produit</label> <input type="number" name="idproduit" placeholder="Identifant du produit:" id=""><br>

<button class="col-md-6" type="submit" id="btn" name="supprimer">supprimer un produit</button>
<form>


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4">
	  <?php foreach($produits as $produit): ?>
        <div class="col">
          <div class="card shadow-sm">
			<title><?= $produit->nom?></title><rect width="100%" height="100%" fill="#55595c"/>
			<img src="<?= $produit->image?>" width="70px"></svg>
		
                <small class="text-muted"> <B><?= $produit->id?></B></small>
              </div>
            </div>
        
		<?php endforeach; ?>

</html>
