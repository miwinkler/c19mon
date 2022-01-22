<?php require "header.php";?>

<?php
$client = new MongoDB\Client("mongodb+srv://raspuserdusgd621v21f127921g721fv721:JBASzu762biu2bkjabscabpv2i2vvashdbasdknasuiIOASUodnwuuiwbdA872v28v27v27v27f2cluster0.7k4q4.mongodb.net/myFirstDatabase?retryWrites=true&w=majority");

$customers = $client->selectCollection('sample_analytics','customers');
$document = $customers->findOne(['username' => 'wesley20']);

var_dump($document);
?>

<div class="card">
  <div class="card-header">Test Card</div>
  <div class="card-body">Google Chart</div>
  <div class="card-footer"></div>
</div>

<?php include "footer.php";?>