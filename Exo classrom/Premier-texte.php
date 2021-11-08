1a href="bonjour.php?nom=Ba&amp;prenom=Ismila">Dis-moi bonjour !</a> 
<?php  echo"Le code \"PHP\" se met ici" ;  ?> 

<?php echo "Ceci est du <strong>texte</strong>"; ?> 
<p>Aujourd'hui nous sommes le <?php echo date('Y/m/d H:i:s'); ?>.</p>
<?php
echo "J'habite en Chine."; // Cette ligne indique où j'habite

// La ligne suivante indique mon âge
echo "J'ai 92 ans.";
?>
<?php
/* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o) */
echo "J'ai 92 ans. ".'<br />';
?>
<?php

// La fonction array permet de créer un array
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
echo $prenoms[1]. '<br />';

?>
<?php
// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
?>

<?php
 echo " <h1> Taleaux associé </h1>" . '<br />';
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
    echo $element .', ';
}
?>
<?php
echo "<h2>Chercher dans  un tableau avec : array_key_exists</h2>";
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées ! .<br />' ;
}

if (array_key_exists('ville', $coordonnees))
{
    echo 'La clé "ville" se trouve dans les coordonnées !';
}

?>
<?php
echo "<h2>Chercher dans  un tableau avec :in_array</h2>";
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}
?>
<?php
echo "<h2>Chercher dans  un tableau avec :array_search</h2>";
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;


echo "<h2>Fonction strlen </h2>";
$phraseC="Je suis une phrase ecrie en php .<br/>";
$ncC=strlen($phraseC);
echo "$phraseC";
echo " il y'a " . $ncC. "  caractères .<br/>";
$phraseL="Je suis une phrase ecrie en php mais plus longue que celle qui me précede .<br/>";
$ncL=strlen($phraseL);
echo "$phraseL";
echo " il y'a " . $ncL. "  caractères ";
echo "<h2>Fonction phase melangée </h2>";
$phraseMl="Je suis une phrase ecrie en php ";
$phraseMelange=str_shuffle($phraseMl);
echo "$phraseMelange";
echo "<h2>Fonction date </h2>";
echo "<h1>Aujourd'hui on est le ". date(" d / m/ Y, H:i:s </h1>");

?>
<?php
echo "<h2>Fonction replace </h2>";
$ma_variable = str_replace('Je suis original ', " moi aussi",  'je remplace l original .</br>');
 
echo $ma_variable;
echo "<h2>Fonction strlower</h2>";
$mJ =" J'AFFICHE EN MINUSCULE CETTE PHRASE ECRIE EN MAJUSCULE";
$moJ= strtolower($mJ);
echo "$moJ";
echo "<h2>Fonction strtoupper</h2>";
$PM=" j'affiche en majuscule cette phrase ecrie en  minuscule";
$PM= strtoupper($mJ);
echo "$PM";
?>

<?php
$monfichier = fopen('Premier-texte.php', 'r+'); 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues =1 ; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($monfichier); 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>

