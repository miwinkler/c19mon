<?php
require 'vendor/autoload.php';


$certificateKeyFilePath = 'mongocert.pem';
$client = new MongoDB\Client(
  'mongodb+srv://cluster0.7k4q4.mongodb.net/myFirstDatabase?authSource=%24external&authMechanism=MONGODB-X509&retryWrites=true&w=majority&tlsCertificateKeyFile=' . $certificateKeyFilePath,
);
$collection = $client->Cluster0->data;




#($uri,tls=true,tlsCertificationKeyFile='mongocert.pem');

?> 