<?php

if(isset($_POST['submit']))  {
    $login = $_POST["id"];
    $passwordd = $_POST["password"];

    $engine = "mysql";
            $host = "localhost";
            $port = 8889;
            $dbname = "asos_id_db";
            $username = "root";
            $password = "root";

            $pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
            
            $maRequete = $pdo->prepare("SELECT * from asos_id WHERE login = :login and password = :password");  
            $maRequete->execute([
                ":login" => $login,
                ":password" => $passwordd,
            ]); 
            $maRequete->execute();
            
            if($maRequete->rowCount() > 0){
                $data = $maRequete->fetchAll();
                if($passwordd == $data[0]["password"])
                    $_SESSION["connecte"] = true;
                    $_SESSION["login"] = $login; 
                    http_response_code(302);
                    header('Location: index_2.php');
                    exit();
                }
    }
?>
