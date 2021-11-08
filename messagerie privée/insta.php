?php
ession_start();
bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');
f(!$_SESSION['pseudo']){
   header('location:connexion.php');
}





<script>
    //   setInterval('load_message()', 500);
//    function load_message(){
    //    $('#messagereçu').load('messages.php');
// </script>

 <form action="" method="" id="inscription">
    <h2>Formulaire</h2>
    <br>
    <br>
    
<input type="text" name="nom" id="prenom" placeholder="Nom:" > <br>
<input type="email" name="email" id="email" placeholder="Couriel:" > <br>
<textarea name="message" id="message" cols="30" rows="7"></textarea>
<br/>
<button type="submit" id="btn">Créer un compte</button>
 </form>
</div> 