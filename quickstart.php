<?php

 // use MongoDB\Client;

    
    require "mongoConnect.php";
    
    require 'config.php';
    require_once __DIR__ . '/vendor/autoload.php'; 

    echo "<h1>Test</h1>";


    
    $certificateKeyFilePath = 'mongocert.pem';
    $mongodbString='mongodb+srv://cluster0.7k4q4.mongodb.net/myFirstDatabase?authSource=%24external&authMechanism=MONGODB-X509&retryWrites=true&w=majority&tlsCertificateKeyFile='.$certificateKeyFilePath;



    $client = new MongoDB\Client($mongodbString);

    
    $collection=$client->selectCollection('C19','data');
    $docs = $collection->find();


    echo "<table>";
    
    foreach($docs as $row){
        echo "<tr>";
            echo "<td>".$row['temperature']."</td>";
        echo "</tr>";
    }

    echo "</table>";

?>

