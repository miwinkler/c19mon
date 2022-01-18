<?php
require 'vendor/autoload.php';
require 'config.php';
require_once __DIR__ . '/vendor/autoload.php';
#$certificateKeyFilePath = 'mongocert.pem';
#$client = new MongoDB\Client('mongodb+srv://cluster0.7k4q4.mongodb.net/myFirstDatabase?authSource=%24external&authMechanism=MONGODB-X509&retryWrites=true&w=majority&tlsCertificateKeyFile=' . $certificateKeyFilePath,);
$client = new MongoDB\Client($mongodbString,);
#($uri,tls=true,tlsCertificationKeyFile='mongocert.pem');
?> 