<?php session_start(); 

require("prix.php");

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
                <a href="login.php"><li>Connexion / Inscription</li></a>
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
            <p>Cher(e)s abonné(e)s, profitez de toutes les réductions.</p>
            <p id="men">HOMMES</p>
        </ul>
    </header>
    <script src="add_panier.php"></script>
</body>
</html>

