
<form   method="POST" action="">
<h3>Atelier PHP :Etape 4</h3>
<h2> <h3> Mode révision, il existe ici 5 questions.<br>
Vous ne pouvez voir la 2 ème Question que si vous trouvez la 1ère,<br>
Au final, vous verrez votre note.
</h3>
<div class="Q1">
<p> Q.1: combien font: 10x0 </p>
<label>Reponse 1</label><input type="number" name="rep1" />
<button class="submit" id="btn" name="affiche">Vérifier</button>
</div>

     <?php 
	
if(isset($_POST['affiche'])){ 
	$note1=$_POST['rep1'];
if (!isset($_POST['rep1']) OR $_POST['rep1'] != "0"){
 echo " <h1 style='background-color:red'>Cours non compris </h1>";
 
}else{
?>
<h2>Note 1: 10</h2>
<div class="Q2">
<p> Q.2: combien font: 3x7 </p> 
<label>Reponse 2</label><input type="number" name="rep2" />
<button class="submit" id="btn" name="affiche2">Vérifier</button>
</div>
<style>
	.Q1{
		visibility: hidden;
		margin-top: -120px;
		
	}
</style>

<?php
}

} 

?>
   <?php 
if(isset($_POST['affiche2'])){ 
if (!isset($_POST['rep2']) OR $_POST['rep2'] != "21"){
 echo " <h1 style='background-color:red'>Cours non compris </h1>";
 
}else{
?>
<h2>Note 2:10</h2>
<div class="Q3">
<p> Q.3: combien font: 6x7 </p>
<label>Reponse 3</label><input type="number" name="rep3" />
<button class="submit" id="btn" name="affiche3">Vérifier</button>
</div>
<style>
	.Q1,.Q2{
		visibility: hidden;
		margin-top: -120px;
		
	}
</style>

<?php
}

} 

?>
   <?php 
if(isset($_POST['affiche3'])){ 
if (!isset($_POST['rep3']) OR $_POST['rep3'] != "42"){
 echo " <h1 style='background-color:red'>Cours non compris </h1>";
 
}else{
?>
<h2>Note 3:10</h2>
<div class="Q4">
<p> Q.4: combien font: 5x7 </p>
<label>Reponse 4</label><input type="number" name="rep4" />
<button class="submit" id="btn" name="affiche4">Vérifier</button>
</div>
<style>
	.Q1,.Q2,.Q3 {
		visibility: hidden;
		margin-top: -120px;
		
	}
</style>

<?php
}

} 

?>
   <?php 
if(isset($_POST['affiche4'])){ 
if (!isset($_POST['rep4']) OR $_POST['rep4'] != "35"){
 echo " <h1 style='background-color:red'>Cours non compris </h1>";
 
}else{
?>
<h2>Note 4: 10</h2>
<div class="Q5">
<p> Q.5: combien font: 10x7 </p>
<label>Reponse 5</label><input type="number" name="rep5" />
<button class="submit" id="btn" name="affiche5">Vérifier</button>
</div>
<style>
	.Q1,.Q2,.Q3.Q4{
		visibility: hidden;
		margin-top: -120px;
		
	}
</style>

<?php
}

} 

?>
   <?php 
if(isset($_POST['affiche5'])){ 
if (!isset($_POST['rep5']) OR $_POST['rep5'] != "70"){
 echo " <h1 style='background-color:red'>Cours non compris </h1>";
 
}else{
?>
<h2>Note 5: 10</h2>
<div class="Q6">
<h2 style='background-color:green'> Bravo ! 20/20 </h2>
</div>

<style>
	.Q1,.Q2,.Q3.Q4{
		visibility: hidden;
		margin-top: -120px;
		
	}
</style>

<?php
}

} 

?>
<form>
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
