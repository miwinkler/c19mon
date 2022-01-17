<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset -->    
    <link rel="stylesheet" href="./css/reset.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Licorice&family=Mountains+of+Christmas&family=Waterfall&display=swap" rel="stylesheet">

    <!-- Icons Font Awesome -->
    <script src="https://kit.fontawesome.com/2be045b226.js" crossorigin="anonymous"></script>

    <title>C19 Monitoring</title>
  </head>

  <body>
    <div class="container-fluid" id="containerSite">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">C19</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fas fa-columns"></i>&nbsp;&Uuml;bersicht</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="temperature.php"><i class="fas fa-thermometer-half"></i>&nbsp;Temperatur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="humidity.php"><i class="fas fa-cloud-rain"></i>&nbsp;Luftfeuchtigkeit</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid" id="containerContent">
            
<?php 
 include "mongoConnect.php"; 
?>