<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Visite o Mundo do Badminton</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href="../../estilos-badminton/badminton.css">
	<link rel="stylesheet" type = "text/css" href="../../estilos-badminton/responsive.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../fontawesome/css/all.min.css">
	<link rel="shortcut icon"  href="../../gifs/badminton.png">
	
</head>

<body>

	<?php 
	if( isset($_GET['id']))  $idJogador = $_GET['id']; 
	else { header('location:../'); die(); }
	?>
	
	<?php require_once('../../functions/connection.php'); ?>

	

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
					<img src="../../gifs/1.gif" class="img-fluid" alt="">	
				</div>
				<div class="col">
					<img src="../../gifs/2.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../../gifs/3.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../../gifs/7.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../../ifs/6.gif" class="img-fluid" alt="">
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
			
			<a class="nav-item nav-link" href="../../badminton/rankings/Singulares-M.php">RANKINGS</a>
			<a class="nav-item nav-link" href="noticias.php">NOTÍCIAS</a>
			<a class="nav-item nav-link" href="#">CALENDÁRIO</a>
			<a class="nav-item nav-link" href="historia.php">HISTÓRIA</a>
			<a class="nav-item nav-link" href="regras.php">REGRAS</a>
			<a class="nav-item nav-link" href="golpes-servicos.php">Golpes/Serviços</a>
			<a class="nav-item nav-link" href="../../badminton/jogadores/Singulares-M">JOGADORES</a>
			<a class="nav-item nav-link" href="videos.php">VÍDEOS</a>
			
		</div>
	</div>
	</nav>
	

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 p-lg-5" style="background-color: darkgray">
				<h2 class="text-center"style="color: black">Kento Momota</h2>	
			</div>
			<div class="col-md-6 p-5" style="background-color: black">
				<img class="img-fluid"src="../../gifs/kentomomota.jpg" alt="">
			</div>
			<div class="col-md-6 p-5" style="background-color: black">
				<h2 class="text-center" style="color: white">Categoria: Singulares-M</h2>
				<p class="jogador" style="text-align: center; color:white">País: Japão <br><img class="img-fluid"src="../../gifs/japao.jpg" title="Japão"alt=""></p>
				<br>
				<p style="color:white">Data de Nascimento: 01/09/1994</p>
				<p style="color:white">Idade: 24</p>
				<p style="color:white"> Pontos Torneios:131313</p>
				<p style="color:white">Mão: Ambidestro</p>
			</div>
			
		</div>
		
	</div>
	
</body>
</html>