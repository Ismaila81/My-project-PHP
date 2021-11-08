<p> 
    <?php  if (isset($_GET['nom']) AND isset($_GET['prenom'])  ) {
        echo "Bonjour ". $_GET['nom'].' '.$_GET['prenom']; 
    } else{
        echo "Pas de nom ni de prenom";
    } ?>
    
</p>