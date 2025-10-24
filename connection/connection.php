<?php
$server = "mysql:host=localhost;dbname=product_inventory";
$user = "root";
$password="";


try{
    $pdo = new PDO($server,$user,$password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "connected successfully!";
    }catch(PDOException $e){
        echo "connection failed! ".$e->getMessage();
    }
?>