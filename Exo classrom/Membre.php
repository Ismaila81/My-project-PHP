

   <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "Tinkita2025") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.
        </p>
 <p>Bonjour  <?php echo htmlspecialchars($_POST['prenom'] );
     ?> </p>
    <?php if (isset  ($_POST['travail'] )){
      echo " <p> Vous êtes alors un étudiant </p>";

    } else{
      echo "Désolé alors vous n'êtes pas éligible ! </p> ";
     };
     echo "Vous avez choisi le ". $_POST['choix'];
    ?>

        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
        echo '<p><B> Vous n\'étes pas élisible pour obtenir le code de la Nasa</B></p>';
    }
    ?>
    