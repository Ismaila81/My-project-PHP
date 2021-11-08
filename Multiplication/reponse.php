
<form   method="POST" action="">
<h3>Atelier PHP :Etape 3</h3>
<h2> Table 4 combien font 4x5 </h2>
<label>Reponse</label><input type="number" name="reponse" /><br>
<button class="submit" id="btn" name="affiche">Afficher</button>
</div>
     <?php 
if(isset($_POST['affiche'])){ 
if (!isset($_POST['reponse']) OR $_POST['reponse'] != "20"){
 echo " <h1 style='background-color:red'> Désolé,Vide ou la
 réponse est mauvaise </h1>";

}
else
{
   echo "<h1 style='background-color:green'>Bravo! 20 c'est bonne réponse :</h1>";
 
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