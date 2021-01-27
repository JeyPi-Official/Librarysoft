<?php 
	
	session_start();
  	error_reporting(0);
  	$session = $_SESSION['name'];
 ?>

 <style type="text/css">
 	#name
 	{
 		width: 100%;
 		text-align: center;
 		background: limegreen;
		position: fixed;
 		bottom: 0;
		border-top: 10px solid rgba(0,0,0,0.15);
		z-index: 5;
 	}

 	h1
 	{
 		padding: 1% 0;
 		font-family: 'Montserrat','Arial';
 		color: rgba(0,0,0,0.15);
 	}

	#sesionname:hover
  {
    cursor: default;
  }

  @media (max-width: 768px)
  {
    #name
    {
	  top: 0;
	  bottom: 87%;
	  width: 80%;
	  margin-left:15%;
	  border: 5px solid rgba(0,0,0,0.15);
	  line-height: 50px;
	  position: absolute;
    }
  }



 </style>

<div id="name">
	<h1 id="sesionname">SESION DE <?php echo strtoupper($session);?></h1>
</div>
