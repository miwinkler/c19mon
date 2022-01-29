<?php

require_once __DIR__ . '/vendor/autoload.php';
require "config.php";
 
$client = new MongoDB\Client($mongodbString);

$coll=$client->selectCollection('C19','data');
$doc = $coll->findOne(['timestamp' => '20220115001847242887']);

var_dump($doc);

?>