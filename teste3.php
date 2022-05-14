<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Visite o Mundo do Badminton</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href="../estilos-badminton/badminton.css">
	<link rel="stylesheet" type = "text/css" href="../estilos-badminton/responsive.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome/css/all.min.css">
	<link rel="shortcut icon"  href="../gifs/badminton.png">
	
</head>

<body>

	<?php require_once('../functions/connection.php'); ?>

	

		<!--<div class="row">
			<div class="img-fluid">
				<div class="imagens">
					<img src="gifs/9.gif" style="max-width: 100%; height=auto "alt="responsive image">
				</div>	
			</div>
				
		</div>-->
		
	<div class="container-fluid">
		<div class="row">
			<div class="img-fluid">
				<div class="imagens">
					<img src="../gifs/9.gif" style="max-width: 100%; height=auto" alt="">
				</div>
			</div>
		</div>
	
	</div>
	

	<div class="imagens-800">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="../gifs/1.gif" class="img-fluid" alt="">	
				</div>
				<div class="col">
					<img src="../gifs/2.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../gifs/3.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../gifs/7.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../gifs/6.gif" class="img-fluid" alt="">
				</div><!--
				
				<div class="col">
					<img src="gifs/7.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="gifs/8.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="gifs/9.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="gifs/10.gif" class="img-fluid" alt="">
				</div>-->
			</div>
		</div>		
	</div>



	
	<!--<header class="masthead text-dark">
	<div class="overlay"></div>
   	 	<div class="container">
			<div class="row">
				<div class="col-md-12 text-center" id="testar" style="background-color: black">
					<h3 class="my-heading font-italic">Visit the World Of Badminton</h3>
				</div>	
			</div>
		</div>
	</header>-->

	
	<div class="container-centrado">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" id="titulo">
					<h3 class="display-4 font-italic">Visite o Mundo do Badminton</h3>
				</div>
			</div>
		</div>
		
	</div>


	<!--<div class="container-centrado">
		<div class="jumbotron-fluid; p-3 mb-0 font-italic">

			<h2 class="display-4">Visit the World Of Badminton</h2>

		</div>
	</div>-->

	<nav class="navbar navbar-expand-md navbar-dark bg-dark py-md-0 sticky-top">
	
	<a class="navbar-brand ml-3" href="">VMB</a><!-- index.php -->

	<button class="navbar-toggler ml-4" type="button" 
			data-toggle="collapse" data-target="#menu-principal">
				<span class="navbar-toggler-icon"></span>
			</button>	

	<div class="collapse navbar-collapse " id="menu-principal">
		<div class="navbar-nav ">
			
			<a class="nav-item nav-link" href="rankings/Singulares-M.php">RANKINGS</a>
			<a class="nav-item nav-link" href="noticias.php">NOTÍCIAS</a>
			<a class="nav-item nav-link" href="#">CALENDÁRIO</a>
			<a class="nav-item nav-link" href="historia.php">HISTÓRIA</a>
			<a class="nav-item nav-link" href="regras.php">REGRAS</a>
			<a class="nav-item nav-link" href="golpes-servicos.php">Golpes/Serviços</a>
			<a class="nav-item nav-link" href="jogadores/Singulares-M">JOGADORES</a>
			<a class="nav-item nav-link" href="videos.php">VÍDEOS</a>
			
		</div>
	</div>
	</nav>

	<div class="row">
	  <div class="col-md-6 mb-3">
	  	<label for="validationCustom03">Category:</label>
	      <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>
	        <option value="">---Selecione---</option>
	        <option value="1">África</option>
	        <option value="2">América</option>
	        <option value="3">Ásia</option>
	        <option value="4">Meeting</option>
	        <option value="5">Other Category</option>
	        <option value="Professional Conference">Professional Conference</option>
	        <option value="Professional Workshop / Training">Professional Workshop / Training</option>
	        <option value="Pupil Services">Pupil Services</option>
	      </select>
		<div class="invalid-feedback">
			Please provide a category.
		</div>
	  </div>
  	<div class="col-md-6 mb-3">
	  	<label for="validationCustom04">Activity:</label>
	     <select class="form-control form-control-lg" id="validationCustom04" name="activity" required></select>
	    <div class="invalid-feedback">
			Please provide an activity.
		</div>
	</div>
</div>
<script src="cat.js"></script>
</body>
</html>