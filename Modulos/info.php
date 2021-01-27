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
    <h1 id="titleHome"><i class="fas fa-book"></i> Versión 28.11.20</h1>

    <p>La versión 28.11.20 es la primera versión que se encuentra aloada en un servidor y que trabaja de forma remota desde cualquier dispositivo.</p>
    <p>Adicionalmente cuenta con un Sistema de Encriptado para las contraseñas y con multiples capas de seguridad.</p>

    <h1>Desarrolladores</h1>

    <p>Aquí puedes encontrar el contacto de los desarrolladores de un sistema</p>

    <p>Ortíz Ballina Juan Pablo - Desarrollador del Proyecto</p>
    <p>Juárez Rivera Fabricio Damián - Programador</p>
    <p>Cortéz Carbajal Luis Alejandro - Programador</p>
    <p>Ledezma Bravo Francisco Javier - Docente</p>
    <br><br><br><br>

    </div>


   </body>
 </html>