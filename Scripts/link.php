<?php

	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'db';

	$link = mysqli_connect($server,$user,$pass,$database);

	if (!$link) {
		echo "Error: Unable to connect to MySQL." .mysqli_connect_errno() . PHP_EOL;
	    exit;
	}
	else
	{
		?>
		<script>  alert('Conexion Exitosa!'); </script>
		<?php

		//mysqli_close($link);
	}

 ?>
