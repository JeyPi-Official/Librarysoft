<?php

  session_start();
  error_reporting(0);
  $session = $_SESSION['name'];

  if ($session == null || $session == '') {
    echo "Error, no cuenta con la autorización para ingresar.";
    die();
  }

 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <link rel="stylesheet" href="../Estilos/menu.css">
     <link rel="stylesheet" href="../Estilos/container.css">
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
     <meta charset="utf-8">
     <title>Booksoft</title>
   </head>
   <body>
    
    <?php include('menu.php'); ?>
    <?php include('namebar.php'); ?>

    <div class="container">
    <h1 id="titleHome">LIBRARYSOFT <i class="fas fa-book"></i></h1>

    <p>LIBRARYSOFT es un sistema de gestion de datos, especialmente creado para la biblioteca del plantel CECyTEQ #7 en San Juan Del Río, Querétaro.</p>

    <p>Puedes consultar más información en la pestaña de Información <i class="fas fa-info-circle"></i>.</p>
  
    <center><img src="../Media/Images/logo.png" alt="Logo Del Plantel CECyTEQ" style="width:100%;"></center>

    </div>


   </body>
 </html>
