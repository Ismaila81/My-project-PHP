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
<form action="#" method="post">
<div class="tout">
<div class="atelier">
<h3>Atelier PHP :Etape 2</h3>
<p>Afficher une table de multiplication</p>
<p> Merci de selectionner la table que vous voulez consulter.</p>
</div>
</div>

	<table>
		<tr>
			<td>
<input type="checkbox" name="choixSelect[]" value="<?php
	echo '<p>Table 0 </p>';
	$numb=0;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*0)."</br> ";
 	}
 ?>"  />Table 0</td>
<td><input type="checkbox" name="choixSelect[]" value="
<?php
echo '<p>Table 1 </p>';
	 $numb=1;
	 for ($i=1; $i <= 10; $i++) { 
	 echo $numb.'*'.$i.'='. ($i*1)."<br> ";
	 }
?>
" />Table 1 </td></tr> 
<!-- ligne 1 -->
<tr>
			<td>
<input type="checkbox" name="choixSelect[]" value="<?php
	echo '<p>Table 2 </p>';
	$numb=2;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*2)."</br> ";
 	}
 ?>" />Table 2</td>
<td><input type="checkbox" name="choixSelect[]" value="
<?php
echo '<p>Table 3 </p>';
	 $numb=3;
	 for ($i=1; $i <= 10; $i++) { 
	 echo $numb.'*'.$i.'='. ($i*3)."<br> ";
	 }
?>
" />Table 3 </td></tr>

		<!-- Ligne 2 -->
		<tr>
			<td>
<input type="checkbox" name="choixSelect[]" value="<?php
	echo '<p>Table 4 </p>';
	$numb=5;
 	for ($i=4; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*4)."</br> ";
 	}
 ?>" />Table 4</td>
<td><input type="checkbox" name="choixSelect[]" value="
<?php
echo '<p>Table 5 </p>';
	 $numb=5;
	 for ($i=1; $i <= 10; $i++) { 
	 echo $numb.'*'.$i.'='. ($i*5)."<br> ";
	 }
?>
" />Table 5 </td></tr>
<!-- Ligne 3 -->
<tr>
			<td>
<input type="checkbox" name="choixSelect[]" value="<?php
	echo '<p>Table 6 </p>';
	$numb=6;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*6)."</br> ";
 	}
 ?>" />Table 6</td>
<td><input type="checkbox" name="choixSelect[]" value="
<?php
echo '<p>Table 7 </p>';
	 $numb=7;
	 for ($i=1; $i <= 10; $i++) { 
	 echo $numb.'*'.$i.'='. ($i*7)."<br> ";
	 }
?>
" />Table 7 </td></tr>
<!-- Ligne 4 -->
<tr>
			<td>
<input type="checkbox" name="choixSelect[]" value="<?php
	echo '<p>Table 8 </p>';
	$numb=8;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*8)."</br> ";
 	}
 ?>" />Table 8</td>
<td><input type="checkbox" name="choixSelect[]" value="
<?php
echo '<p>Table 9 </p>';
	 $numb=9;
	 for ($i=1; $i <= 10; $i++) { 
	 echo $numb.'*'.$i.'='. ($i*9)."<br> ";
	 }
?>
" />Table 9 </td></tr>
<tr>
			<td>
<input type="checkbox" name="choixSelect[]" value="
<?php
echo '<p>Table 10 </p>';
	$numb=10;
 	for ($i=1; $i <= 10; $i++) { 
 	echo $numb.'*'.$i.'='. ($i*10)."</br> ";
 	}
 ?>" />Table 10</td></tr>
<td>
<!-- <input type="reset" name="annuler" value="Annuler" /> -->
<button id="cancel" name="Annuler" class="btn btn-default bg-danger" value="1">Annuler</button>
<input type="submit" class="bg-success" name="Result" value="Voir resultats" />
</td>
		</tr>
	</table>

</form>
</div>
  </div>
<div class="affiche">
<?php


if(isset($_POST['Result'])){
	$table = $_POST['choixSelect'];
	if(empty($table )) 
	   {
	     //echo("Aucune table selectionnée.");
	   } 
	   else 
	   {
	     $N = count($table );
	
	     echo("Vous avez selectionnez $N table(s): <br> ");
	     for($i=0; $i < $N; $i++)
	     {
	       echo($table  [$i] . " ");
	     }
	   }
	

	   }
if(isset($_POST['annuler'])){
echo 'annuler';
}
?>
</div>
<style>
.atelier{

background-color:blue;
align-items: center;
text-align: center;

}
form{
	margin-left: 400px;
	text-align: center;
	align-items: center;
	
	width: 400px;	
}
select{
background-color: white;
width: 300px;
}
.droit{

	margin-top: 30px;
	margin-left: 150px;
}
input{
	margin:20px;
	color:blue;
}
/* .affiche{
color: unset;
} */
 </style>