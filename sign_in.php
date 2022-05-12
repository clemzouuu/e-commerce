<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST")  {
    $login = filter_input(INPUT_POST, "login"); 
    $passwordd = filter_input(INPUT_POST, "mdp");  
    
    if($login && $passwordd) {
        $engine = "mysql";
        $host = "localhost";
        $port = 8889;
        $dbname = "asos_id_db";
        $username = "root";
        $password = "root";

        $pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
        
        
        $maRequete = $pdo->prepare("INSERT INTO asos_id (login,password) VALUES(:login,:password)");  
        $maRequete->execute([
            ":login" => $login,
            ":password" => $passwordd
        ]);
        
        http_response_code(302);  
        $_SESSION["connecte"] = true;
        $_SESSION["login"] = $login; 
        header('Location: index_2.php'); 
        exit();  

    }
    
}  
?>
