<?php session_start();
require("login.php");
require("sign_in.php");
$_SESSION["connecte"] = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asos Brand</title>
    <link rel="stylesheet" href="asos.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
            <ul class="first_band">
                <h1><li id="logo">asos</li></h1>
                <li>FEMMES</li>
                <li>HOMMES</li>
                <li><input id="input" type="search" placeholder="Cherchez vos marques préférées"> </li>
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


    <div class="box">
        <div class="inscription">
            <h1>Inscription</h1>

            <form method="POST">
                <label for="login">Identifiant</label>
                <input type="text" name="login" id="id" placeholder="Ex : client"/><br/>
                <label for="password">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" /><br/>
                <input type="submit" value="Enregistrer" class="button" id="submit"/>
            </form>
        </div>

        <div class="connexion">
            <h1>Connexion</h1>
            <form method="POST">
                <label for="login">Identifiant</label>
                <input type="text" name="id" id="login" /><br/>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" /><br/>
                <input type="submit" name ="submit" value="Se connecter" class="button" />
            </form>
        </div> 
    </div>

</body>
</html>