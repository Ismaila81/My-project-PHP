<?php
$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'Tinkita', 'Tinkita2025');
$recupmessages = $bdd->query('SELECT * FROM message ORDER BY ID DESC ');
while ($messages = $recupmessages->fetch()){
    ?>
    
    <div class="message" style="color:green"> 
    <h4><?= $messages['pseudo']; ?> </h4>
    </div>
    <div class="message" style="color:blue"> 
    <p><?= $messages['message']; ?> </p>
</div>
<?php
}
?>
<style>
#message {
    width: 300px;
    font-size: 110%;
    font-weight: 100;
    padding: 10px;
    background: turquoise;
    border-color: #f3e5e2;
    border-radius: 30px;
    color: #fff;
    margin-top: 10px;
   }
</style>