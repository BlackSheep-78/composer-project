<?php
    try 
    {
        $conn = new PDO("mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'] );
        
        // Set PDO attributes for error handling
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("SELECT * FROM produit");
        $stmt->execute();
        
        // Fetch results if needed
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print "<pre>";
        print_r($results);  // Optionally display the results
        print "</pre>";
        
    } 
    catch (PDOException $e) 
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>