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
					<img src="../../gifs/9.gif" style="max-width: 100%; height=auto" alt="">
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
					<img src="../../gifs/6.gif" class="img-fluid" alt="">
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

	
	<div class="container-fluid">
		<div class="row">
			<div class="col " id="titulo">
				<h3 class="display-4 font-italic">Visite o Mundo do Badminton</h3>
			</div>
		</div>
	</div>
		
	

	<nav class="navbar navbar-expand-md navbar-dark bg-dark py-md-0 sticky-top">
	
	<a class="navbar-brand ml-3" href="../../badminton">VMB</a><!-- index.php -->

	<button class="navbar-toggler ml-4" type="button" 
			data-toggle="collapse" data-target="#menu-principal">
				<span class="navbar-toggler-icon"></span>
			</button>	

	<div class="collapse navbar-collapse " id="menu-principal">
		<div class="navbar-nav ">
			
			<a class="nav-item nav-link" href="">RANKINGS</a>
			<a class="nav-item nav-link" href="noticias.php">NOTÍCIAS</a>
			<a class="nav-item nav-link" href="#">CALENDÁRIO</a>
			<a class="nav-item nav-link" href="../../badminton/historia.php">HISTÓRIA</a>
			<a class="nav-item nav-link" href="../../badminton/regras.php">REGRAS</a>
			<a class="nav-item nav-link" href="../../badminton/golpes-servicos.php">Golpes/Serviços</a>
			<a class="nav-item nav-link" href="../jogadores/Singulares-M">JOGADORES</a>
			<a class="nav-item nav-link" href="../../badminton/videos.php">VÍDEOS</a>
			
		</div>
	</div>
	</nav>

	<p></p>
	<div class="support-buttons">
		<a href="" class="btn btn-primary"><strong>Singulares-M</strong></a>
		<a href="" class="btn btn-outline-dark"><strong>Singulares-F</strong></a>
		<a href="" class="btn btn-outline-dark"><strong>Duplas-M</strong></a>
		<a href="" class="btn btn-outline-dark"><strong>Duplas-F</strong></a>
		<a href="" class="btn btn-outline-dark"><strong>Duplas Mistas</strong></a>
	</div>
	<div class="container">
		<div class="row">
			<?php 
			$sql = 'SELECT jogadores.nomeJogador , rankings.rankJogador
				FROM jogadores
				INNER JOIN rankings
				ON jogadores.idJogador = rankings.idJogador';

			$stmt = $dbh->prepare( $sql );
			$stmt->execute();

			if($stmt && $stmt->rowCount() > 0){?>
				
				<div class=" col-12 m-5" style="align-items: center">
				    <table class="table">
				      <thead>
				        <tr>
				          <th>Rank</th>
				          <th>Nome</th>
				          <th>Pontos Torneio</th>
				          <th style="width: 36px;"></th>
				        </tr>
				      </thead>
				      <tbody>
				      	<?php 
						while( $obj = $stmt->fetchObject())
						{
							?>
								<tr>
				          <td><?php echo $obj->rankJogador ?></td>
				          <td><?php echo $obj->nomeJogador ?></td>
				          <td>31313133113</td>
				         </tr>
				      	 
						
				       <?php } ?>
				     	   
				        
				      </tbody>
				    </table>
				</div>
			<?php 
				
			}
			else
				echo 'não tem nada para mostrar';

			?>
		</div>
		
	</div>
		
	



<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bs.js"></script>		

</body>
</html>