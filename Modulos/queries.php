<?php

  session_start();
  error_reporting(0);
  $session = $_SESSION['name'];

  if ($session == null || $session == '') {
    echo "Error, no cuenta con la autorización para ingresar.";
    die();
  }

 ?>

<script src="https://kit.fontawesome.com/508e4625cc.js" crossorigin="anonymous"></script>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <link rel="stylesheet" href="../Estilos/menu.css">
     <link rel="stylesheet" href="../Estilos/container.css">
     <link rel="stylesheet" href="../Estilos/queries.css">
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
     <meta charset="utf-8">
     <title>Booksoft</title>
   </head>
   <body>
    
    <?php include('menu.php'); ?>
    <?php include('namebar.php'); ?>
    
    <div class="container">
      <form action="../Scripts/search.php" method="post">
        <h2 class="topic">Consultas</h2>
        <input id="search-field" type="text" placeholder="Buscar Por Id.." name="searching">
        <button id="search-btn" for="search-field"><i class="fas fa-search"></i></button>
        <br>
        <p>Aquí puedes consultar los libros disponibles en la biblioteca del plantel CECyTEQ #7 en San Juan Del Río, Querétaro.</p>
        <p>Unicamente se puede buscar por Id del libro.</p>
      </form>
    </div>

   </body>
 </html>