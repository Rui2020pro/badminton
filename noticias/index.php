<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" type="image/x-icon" href="gifs/vtwob.ico"><title>Visite o Mundo do Badminton</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href="../estilos-badminton/badminton.css">
	<link rel="stylesheet" type = "text/css" href="../estilos-badminton/responsive.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome/css/all.min.css">
	<link rel="shortcut icon"  href="gifs/badminton.png">

</head>
<body>
	<?php require_once('../functions/connection.php'); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="img-fluid">
				<div class="imagens">
					<img src="gifs/9.gif" style="max-width: 100%; height=auto" alt="">
				</div>
			</div>
		</div>
		
	</div>

	<div class="imagens-800">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="gifs/8.gif" class="img-fluid" alt="">	
				</div>
				<div class="col">
					<img src="gifs/10.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="gifs/7.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="gifs/3.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="gifs/5.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="gifs/6.gif" class="img-fluid" alt="">
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

	<div class="container-centrado">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 " id="titulo">
					<h3 class="display-4 font-italic">Visite o Mundo do Badminton</h3>
				</div>
			</div>
		</div>
		
	</div>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark py-md-0 sticky-top">
	
		<a class="navbar-brand ml-3" href="badminton2.php">VMB</a><!-- index.php -->

		<button class="navbar-toggler ml-4" type="button" 
				data-toggle="collapse" data-target="#menu-principal">
					<span class="navbar-toggler-icon"></span>
				</button>	

		<div class="collapse navbar-collapse " id="menu-principal">
			<div class="navbar-nav ">
				
				<a class="nav-item nav-link" href="rankings.php" >RANKINGS</a>
				<a class="nav-item nav-link" href="noticias">NOTÍCIAS</a>
				<a class="nav-item nav-link" href="#">CALENDÁRIO</a>
				<a class="nav-item nav-link" href="#">HISTÓRIA</a>
				<a class="nav-item nav-link" href="#">REGRAS</a>
				<a class="nav-item nav-link" href="jogadores/lista-dos-jogadores-M.php">JOGADORES</a>
				<a class="nav-item nav-link" href="videos">VÍDEOS</a>

			</div>
		</div>
	</nav>

	
	<!--<div class="container">
		<div class= "row">
			<div class="span8" id= "carousel-bounding-box">
				<div class="carousel slide" id="carousel-show-unico">
					<div class="carousel-inner">
						<div class="active item" data-slide-number="0">
                        	<img src="gifs/anders.jpg">
                   		</div>

                        <div class="item" data-slide-number="1">
                        	<img src="gifs/anders.jpg">
                        </div>

                        <div class="item" data-slide-number="2">
                        	<img src="gifs/anders.jpg">
                        </div>

                        <div class="item" data-slide-number="3">
                        	<img src="gifs/anders.jpg">
                        </div>

                        <div class="item" data-slide-number="4">
                        	<img src="gifs/anders.jpg">
                        </div>

                        <div class="item" data-slide-number="5">
                        	<img src="gifs/anders.jpg">
                        </div>
					</div>
					<a class="carousel-control left" data-slide="prev" href="#carousel-show-unico"></a> <a class="carousel-control right" data-slide="next" href="#carousel-show-unico"></a>
				</div>
			</div>
		</div>
	</div>-->
	<div class="container-fluid">
		<div class="row">
			<div class="carousel">
				<div class="carousel-slide">
					<div class="carousel-control-next-icon">
						<div class="carousel-caption">
							<div class="carousel-inner">
								<div class="carousel-item">
									<img src="gifs/anders.jpg">
								</div>
								<div class="carousel-item">
									<img src="gifs/anders.jpg">
								</div>
								<div class="carousel-item">
									<img src="gifs/anders.jpg">
								</div>
								<div class="carousel-item">
									<img src="gifs/anders.jpg">
								</div>
								<div class="carousel-item">
									<img src="gifs/anders.jpg">
								</div>
							</div>
							
						</div>
					</div>
					<div class="carousel carousel-control-prev">
					
					</div>
				</div>
			</div>
			
		</div>	
	</div>
	<div class="carousel">
		<div id="slideshow-unico"class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slideshow-unico" data-slide-to="0" class="active"></li>
					<li data-target="#slideshow-unico" data-slide-to="1" ></li>
					<li data-target="#slideshow-unico" data-slide-to="2" ></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="gifs/axelsen.jpg" alt="">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="gifs/axelsen.jpg" alt="">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="gifs/axelsen.jpg" alt="">
					</div>
				</div>
							
		</div>
						
	</div>	
		
	












<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bs.js"></script>		

</body>



</html>