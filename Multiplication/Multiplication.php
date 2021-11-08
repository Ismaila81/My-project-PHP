<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

<div class="form-group">
<div class="tout">
<div class="atelier">
<h3>Atelier PHP :Etape 1</h3>
<p>Afficher une table de multiplication</p>
</div>
<form action="" method="post">
<p> Merci de selectionner la table que vous voulez consulter.</p>
  
  <select name="array[]">
	
  <option value="<?php
	$numb=1;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*1)."</br> ";
 	}
 ?>" >Table 1</option>
  <option value="<?php
	$numb=2;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*2)."</br> ";
 	}
 ?>" >Table 2</option>
  <option value="<?php
	$numb=3;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*3)."</br> ";
 	}
 ?>" >Table 3</option>
  <option value="<?php
	$numb=4;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*4)."</br> ";
 	}
 ?>" >Table 4</option>
  <option value="<?php
	$numb=5;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*5)."</br> ";
 	}
 ?>" >Table 5</option>
  <option value="<?php
	$numb=6;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*6)."</br> ";
 	}
 ?>" >Table 6</option>
  <option value="<?php
	$numb=7;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*7)."</br> ";
 	}
 ?>" >Table 7</option>
  <option value="<?php
	$numb=8;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*8)."</br> ";
 	}
 ?>" >Table 8</option>
  <option value="<?php
	$numb=9;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*9)."</br> ";
 	}
 ?>" >Table 9</option>
    <option value="<?php
	$numb=10;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*10)."</br> ";
 	}
 ?>" >Table 10</option>
    
  </select>
  <br>
  <button id="cancel" name="Annuler" class="btn btn-default bg-danger" value="1">Annuler</button>
  <!-- <input type="reset"  value="Annuler"/> -->
  <input type="submit" class="bg-success" value="Voir Resultats"/>
</form>
<div class="afficher">
<?php
$table = $_POST['array'];
foreach ($table as $choix){
    echo $choix;
}


//include('essai.php')
?>

</div>
</div>
</div>
 

<style>
.tout{
background-color: gray;
width: 460px;
margin-left: 450px;
}
.atelier{
width: 400px;
padding: 30px;
align-items: center;
text-align: center;
background-color: blue;
color: cornsilk;


}
form{
background-color: white;
align-items: center;
text-align: center;
}
.afficher{
color: white;
align-items: center;
text-align: center;

}
input{
margin: 20px;
	color: blue;
}
</style>
<?php
//include('mutilple_chekbook.php');
?>