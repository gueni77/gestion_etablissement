<?php 
    session_start();
    
    $servername = "localhost";
    $dbname = "schoolsystem";
    $username = "root";
    $password = "rootAlla@23";

    try {
        $connexion = new PDO("mysql:host$servername; dbname=$dbname", $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        
        return $connexion;
    } catch (Exception $e) {
    
        die("erreur de la connexion :" . $e->getMessage());
    }
