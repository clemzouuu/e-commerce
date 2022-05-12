<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST")  {
    $loginn = filter_input(INPUT_POST, "art1");  
    
    if($loginn) {
        $engine = "mysql";
        $host = "localhost";
        $port = 8889;
        $dbname = "asos_id_db";
        $username = "root";
        $password = "root";

        $pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
        
        
        $maRequete = $pdo->prepare("INSERT INTO panier (article,price) VALUES(:login,:cc)");  
        $maRequete->execute([
            ":login" => "salut",
        ]);
    
    }
}  
?>
