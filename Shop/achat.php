<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=Shop;charset=utf8', 'Tinkita', 'Tinkita2025');
if(isset($_POST['panier'])){
/* Initialisation du panier */ 
$_SESSION['panier'] = array(); 
/* Subdivision du panier */ 
$_SESSION['panier']['image'] = array();
$_SESSION['panier']['nom'] = array();  
$_SESSION['panier']['description'] = array(); 
$_SESSION['panier']['prix'] = array(); 
        $recupusers = $bdd->prepare('SELECT * FROM produits');
        $recupusers->execute(array($_SESSION['id']));
        if($recupusers->rowCount()>0){
			$_SESSION['panier']['image'] = array();
			$_SESSION['panier']['nom'] = array();  
        $_SESSION['id']=$recupusers->fetch()['id'];
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
/*                 Fonctions annexes de gestion du panier                  */ 
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 

/** 
* Vérifie la quantité enregistrée d'un article dans le panier 
* 
* @param String $ref_article référence de l'article à vérifier 
* @return Mixed Renvoie le nombre d'article s'il y en a, ou Faux si cet article est absent du panier 
*/ 
function nombre_article($ref_article) 
{ 
    /* On initialise la variable de retour */ 
    $nombre = false; 
    /* Comptage du panier */ 
    $nb_art = count($_SESSION['panier']['id_article']); 
    /* On parcoure le panier à la recherche de l'article pour vérifier le cas échéant combien sont enregistrés */ 
    for($i = 0; $i < $nb_art; $i++) 
    { 
        if($_SESSION['panier']['id_article'][$i] == $ref_article) 
        $nombre = $_SESSION['panier']['qte'][$i]; 
    } 
    return $nombre; 
} 

/** 
* Calcule le montant total du panier 
* 
* @return Double 
*/ 
function montant_panier() 
{ 
    /* On initialise le montant */ 
    $montant = 0; 
    /* Comptage des articles du panier */ 
    $nb_articles = count($_SESSION['panier']['id_article']); 
    /* On va calculer le total par article */ 
    for($i = 0; $i < $nb_articles; $i++) 
    { 
        $montant += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i]; 
    } 
    /* On retourne le résultat */ 
    return $montant; 
} 

/** 
* Vérifie la présence d'un article dans le panier 
* 
* @param String $ref_article référence de l'article à vérifier 
* @return Boolean Renvoie Vrai si l'article est trouvé dans le panier, Faux sinon 
*/ 
function verif_panier($ref_article) 
{ 
    /* On initialise la variable de retour */ 
    $present = false; 
    /* On vérifie les numéros de références des articles et on compare avec l'article à vérifier */ 
    if( count($_SESSION['panier']['id_article']) > 0 && array_search($ref_article,$_SESSION['panier']['id_article']) !== false) 
    { 
        $present = true; 
    } 
    return $present; 
} 

/** 
* Fonction de verrouillage du panier pendant la phase de paiement. 
* 
*/ 
function preparerPaiement() 
{ 
    $_SESSION['panier']['verrouille'] = true; 
    header("Location: URL_DU_SITE_DE_BANQUE"); 
} 

/** 
* Fonction qui va enregistrer les informations de la commande dans 
* la base de données et détruire le panier. 
* 
*/ 
function paiementAccepte() 
{ 
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
    /*   Stockage du panier dans la BDD   */ 
    /* ajoutez ici votre code d'insertion */ 
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
    unset($_SESSION['panier']); 
} 



        }else{
            echo 'Aucun utilsateur trouvé';
        }

    }
?>
<?php
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
/*                 Fonctions annexes de gestion du panier                  */ 
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 

/** 
* Vérifie la quantité enregistrée d'un article dans le panier 
* 
* @param String $ref_article référence de l'article à vérifier 
* @return Mixed Renvoie le nombre d'article s'il y en a, ou Faux si cet article est absent du panier 
*/ 
function nombre_article($ref_article) 
{ 
    /* On initialise la variable de retour */ 
    $nombre = false; 
    /* Comptage du panier */ 
    $nb_art = count($_SESSION['panier']['id_article']); 
    /* On parcoure le panier à la recherche de l'article pour vérifier le cas échéant combien sont enregistrés */ 
    for($i = 0; $i < $nb_art; $i++) 
    { 
        if($_SESSION['panier']['id_article'][$i] == $ref_article) 
        $nombre = $_SESSION['panier']['qte'][$i]; 
    } 
    return $nombre; 
} 

/** 
* Calcule le montant total du panier 
* 
* @return Double 
*/ 
function montant_panier() 
{ 
    /* On initialise le montant */ 
    $montant = 0; 
    /* Comptage des articles du panier */ 
    $nb_articles = count($_SESSION['panier']['id_article']); 
    /* On va calculer le total par article */ 
    for($i = 0; $i < $nb_articles; $i++) 
    { 
        $montant += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i]; 
    } 
    /* On retourne le résultat */ 
    return $montant; 
} 

/** 
* Vérifie la présence d'un article dans le panier 
* 
* @param String $ref_article référence de l'article à vérifier 
* @return Boolean Renvoie Vrai si l'article est trouvé dans le panier, Faux sinon 
*/ 
function verif_panier($ref_article) 
{ 
    /* On initialise la variable de retour */ 
    $present = false; 
    /* On vérifie les numéros de références des articles et on compare avec l'article à vérifier */ 
    if( count($_SESSION['panier']['id_article']) > 0 && array_search($ref_article,$_SESSION['panier']['id_article']) !== false) 
    { 
        $present = true; 
    } 
    return $present; 
} 

/** 
* Fonction de verrouillage du panier pendant la phase de paiement. 
* 
*/ 
function preparerPaiement() 
{ 
    $_SESSION['panier']['verrouille'] = true; 
    header("Location: URL_DU_SITE_DE_BANQUE"); 
} 

/** 
* Fonction qui va enregistrer les informations de la commande dans 
* la base de données et détruire le panier. 
* 
*/ 
function paiementAccepte() 
{ 
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
    /*   Stockage du panier dans la BDD   */ 
    /* ajoutez ici votre code d'insertion */ 
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
    unset($_SESSION['panier']); 
} 
?> 