<?php 

require("prix.php");

session_start();
$profile = $_SESSION["login"];
$_SESSION["connecte"] = true;
if(!$_SESSION["connecte"]) {
    http_response_code(302);
    header('Location: index_2.php');
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asos Brand</title>
    <link rel="stylesheet" href="asos.css">
</head>
<body>
    <header>
            <ul class="first_band">
                <h1><li id="logo">asos</li></h1>
                <li>FEMMES</li>
                <li>HOMMES</li>
                <li><input id="input" type="search" placeholder="Cherchez vos marques préférées"> </li>
                <a href="index.php"><li>Déconnexion</li></a>
            </ul>

        <ul class="second_band">
            <li id="sales">SOLDES</li> 
            <li>Nouveautés</li>
            <li>Pulls</li>
            <li> Chemises </li>
            <li>T-Shirts</li>
            <li>Pantalons</li>
            <li>Robes</li>
            <li>Lingerie</li>
            <li>Sous-vêtements</li>
            <li>Chaussures</li>
            <li>Montres</li>
            <li>Accessoires</li>
        </ul>
        
        <ul class="third_band"> 
            <p id="women">FEMMES</p>
            <p>Profitez de toutes les réductions.</p>
            <p id="men">HOMMES</p>
        </ul>
    </header>

    <p id="number">1,549 produits disponibles</p>

    <a href="panier.php"><input type="button" id="panier" value="Mon Panier"></a>
    <div class="clothes">
    <img src="img/tenue_6.png" alt="outfit"><p id="p1"><?php $article1->afficher_nom()?><?= $article1->afficher_nv_prix()?><input type="button" value="Add" id="art1.2"></p>
        <img src="img/tenue_2.png" alt="outfit"><p id="p1"><?php $article2->afficher_nom()?><?= $article2->afficher_nv_prix()?><input type="button" value="Add" id="art2.2"></p>
        <img src="img/tenue_3.png" alt="outfit"><p id="p1"><?php $article3->afficher_nom()?><?= $article3->afficher_nv_prix()?><input type="button" value="Add" id="art3.2"></p>
        <img src="img/tenue_4.png" alt="outfit"><p id="p1"><?php $article4->afficher_nom()?><?= $article4->afficher_nv_prix()?><input type="button" value="Add" id="art4.2"></p>
        <img src="img/tenue_8.png" alt="outfit"><p id="p2"><?php $article5->afficher_nom()?><?= $article5->afficher_nv_prix()?><input type="button" value="Add" id="art5.2"></p>
        <img src="img/tenue_0.png" alt="outfit"><p id="p2"><?php $article6->afficher_nom()?><?= $article6->afficher_prix()?><input type="button" value="Add" id="art6.2"></p>
        <img src="img/tenue_9.png" alt="outfit"><p id="p2"><?php $article7->afficher_nom()?><?= $article7->afficher_nv_prix()?><input type="button" value="Add" id="art7.2"></p>
        <img src="img/tenue_7.png" alt="outfit"><p id="p2"><?php $article8->afficher_nom()?><?= $article8->afficher_nv_prix()?><input type="button" value="Add" id="art8.2"></p>
    </div>

</body>
</html>