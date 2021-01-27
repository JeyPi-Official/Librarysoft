<?php

	//Importamos clases
	include_once 'link.php';

	//Vaciamos los formularios
	$userInput = $_POST["user"];
	$passInput = $_POST["pass"];

	//Creamos las sencentias preparadas
	$userQuery = "SELECT * FROM usuarios WHERE nombre = '$userInput'";
	$userStatement = (mysqli_query($link, $userQuery));
	$userRow = mysqli_fetch_assoc($userStatement);

	//Seguridad de Login
	$secureLayers = rand(5,20);
	$password = $userRow['clave'];
	$username = $userRow['nombre'];
	$hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => $secureLayers]);

	//Menajes
	$userErrorMsg = "Error, Usuario Incorrecto!";
	$userGoodMsg = "Correcto, Usuario Válido!";
	$loginGoodMsg = "Sesion Iniciada, Bienvenido " . mb_strtoupper($userInput) . "!";
	$loginErrorMsg = "Sesion Inválida, se notificará cada intento de acceso incorrecto";

	//Validamos al Usuario
	if ($userInput == $username)
	{
		echo $userGoodMsg . '<br/>';
		if (password_verify($passInput, $hash))
		{
			session_start();
			$_SESSION['name'] = $userInput;
			header("Location:../Modulos/main.php");
		}
		else
		{
			echo $loginErrorMsg . '<br/>';
		}
	}
	else
	{
		echo $userErrorMsg . '<br/>';
	}




	// if ()
	// {
	// 		echo $userErrorMsg;
	// }
	// else
	// {
	// 	echo $userGoodMsg;
	//
	// 	$password =  $userRow['clave'];
	//
	// 	if ($passInput == $password)
	// 	{
	// 		echo $loginGoodMsg;
	// 	}
	// 	else
	// 	{
	// 		echo $loginErrorMsg;
	// 	}
	// }


 ?>
