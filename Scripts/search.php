<?php

    //Importamos clases
    include_once 'link.php';

    //Vaciamos el formulario
    $toSearch = $_POST["searching"];

    //Inicializamos Variables
    $queryAllBooks = "";

    //Verificamos el tipo de consulta y creamos las sentencias preparadas
    if ($toSearch == '' || $toSearch == null)
    {
        $queryAllBooks = "SELECT * FROM libros";
    }
    else
    {
        $queryAllBooks = "SELECT * FROM libros WHERE id = '".$toSearch."'";
    }
    
    //Iniciamos la sentencia correspondiente
    $stateAllBooks = (mysqli_query($link,$queryAllBooks));

    //Verificamos que haya una sesión valida
    session_start();
    error_reporting(0);
    $session = $_SESSION['name'];

    if ($session == null || $session == '')
    {
        echo "Error, no cuenta con la autorización para ingresar.";
        die();
    }

    ?>

    <!-- Iniciamos la Tabla de Consultas -->
    <div class="container">

        <table>

        <tr>
            <th><span>ID</span></th>
            <th><span>NOMBRE</span></th>
            <th><span>AUTOR</span></th>
            <th><span>EDITORIAL</span></th>
        </tr>

        <?php

        while ($rowAllBooks = $stateAllBooks->fetch_array())
        {
            $id = $rowAllBooks['id'];
            $name = $rowAllBooks['nombre'];
            $creator = $rowAllBooks['autor'];
            $place = $rowAllBooks['editorial'];
            
        ?>

            <tr>
                <th><?php echo $id ?></th>
                <th><?php echo $name ?></th>
                <th><?php echo $creator ?></th>
                <th><?php echo $place ?></th>

            </tr>
        
        <?php

        }

        ?>

        <!DOCTYPE html>
        <html lang="en">
        <?php include('../Modulos/head.php')?>
        <head>
            <link rel="stylesheet" href="../Estilos/menu.css">
        </head>
        <body>
            

        <?php include('../Modulos/menu.php')?>
        <?php include('../Modulos/namebar.php') ?>
        

        </table>

    <style>
        table,
        tr, 
        th
        {
            border: 1px solid #000;
            font-family: 'Montserrat';
            border-radius: 10px;
        }

        table
        {
            width: 50%;
            margin: auto;
            margin-top: 10%;
            margin-bottom: 10%;
            padding: 15px; 
            overflow-y: auto;
        }

        th
        {
            padding: 5px;
            margin: 15px;
        }

        tr
        {
            margin-top: 20%;
        }

        span
        {
            color: darkorange;
        }

    </style>
    </body>
    </html>

    <?php

?>