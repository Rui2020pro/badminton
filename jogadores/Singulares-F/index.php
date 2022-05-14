<?php 
if( isset($_GET['pagina'])) $offset = $_GET['pagina'];
else $offset =1;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Visite o Mundo do Badminton</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href="../../../estilos-badminton/badminton.css">
	<link rel="stylesheet" type = "text/css" href="../../../estilos-badminton/responsive.css">
	<link rel="stylesheet" href="../../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../fontawesome/css/all.min.css">
	<link rel="shortcut icon"  href="../../../gifs/badminton.png">
	
</head>

<body>
	<?php require_once('../../../functions/connection.php'); ?>



	<div class="container-fluid">
		<div class="row">
			<div class="img-fluid">
				<div class="imagens">
					<img src="../../../gifs/9.gif" style="max-width: 100%; height=auto" alt="">
				</div>
			</div>
		</div>
		
	</div>

	<div class="imagens-800">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="../../../gifs/8.gif" class="img-fluid" alt="">	
				</div>
				<div class="col">
					<img src="../../../gifs/10.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../../../gifs/7.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../../../gifs/3.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../../../gifs/5.gif" class="img-fluid" alt="">
				</div>
				<div class="col">
					<img src="../../../gifs/6.gif" class="img-fluid" alt="">
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
	
	<a class="navbar-brand ml-3" href="../../../badminton">VMB</a><!-- index.php -->

	<button class="navbar-toggler ml-4" type="button" 
			data-toggle="collapse" data-target="#menu-principal">
				<span class="navbar-toggler-icon"></span>
			</button>	

	<div class="collapse navbar-collapse " id="menu-principal">
		<div class="navbar-nav ">
			
			<a class="nav-item nav-link" href="../../rankings/Singulares-M.php" >RANKINGS</a>
			<a class="nav-item nav-link" href="#">NOTÍCIAS</a>
			<a class="nav-item nav-link" href="#">CALENDÁRIO</a>
			<a class="nav-item nav-link" href="../../../badminton/historia.php">HISTÓRIA</a>
			<a class="nav-item nav-link" href="../../../badminton/regras.php">REGRAS</a>	
			<a class="nav-item nav-link" href="../../../badminton/golpes-servicos.php">Golpes/Serviços</a>
			<a class="nav-item nav-link" href="">JOGADORES</a>
			<a class="nav-item nav-link" href="../../../badminton/videos.php">VÍDEOS</a>

		</div>
	</div>
	</nav>
	<h3 class="p-2"style="text-align: center">Lista dos Jogadores</h3>
	<p></p>
	<div class="support-buttons">
		<a href="../Singulares-M" class="btn btn-outline-dark"><strong>Singulares-M</strong></a>
		<a href="" class="btn btn-primary"><strong>Singulares-F</strong></a>
		<a href="" class="btn btn-outline-dark"><strong>Duplas-M</strong></a>
		<a href="" class="btn btn-outline-dark"><strong>Duplas-F</strong></a>
		<a href="" class="btn btn-outline-dark"><strong>Duplas Mistas</strong></a>
	</div>
	<div class="container p-3">	
			<div class="row" id="links-jogadores">
				<!--<div class="panel panel-default modal-dialog">
					<div class="panel-body">
						<button class="active">M</button>
					</div>
				</div>-->

				<?php 

				$pagina = ( !isset( $_GET['pagina'] )) ? 1 : $_GET['pagina']; 

				$sql = 'SELECT jogadores.nomeJogador, jogadores.imagemJogador, rankings.rankJogador 
					FROM jogadores,rankings 
					where  jogadores.idJogador = rankings.idJogador';
				
				$stmt = $dbh->prepare( $sql );
				
				$stmt->execute();

				$result = $stmt->fetchAll();

				// ceil - O método ceil () arredonda um número para o inteiro mais próximo e retorna o resultado.

				$porPagina = 4;
				$totalPaginas = ceil( count($result) / $porPagina );
				$inicio = ( $porPagina * $pagina ) - $porPagina;

				/*$aux=$stmt->rowCount();*/

				$sql = 'SELECT jogadores.nomeJogador, jogadores.imagemJogador,rankings.rankJogador 
					FROM jogadores,rankings 
					where  jogadores.idJogador = rankings.idJogador, jogadores.modoJogador = "Singulares-M"
					LIMIT :inicio, :porPagina';


				$stmt = $dbh->prepare( $sql );
				$stmt->bindParam(':inicio', $inicio, PDO::PARAM_INT);
				$stmt->bindParam(':porPagina', $porPagina, PDO::PARAM_INT);
				$stmt->execute();

					/*LIMIT :inicio, :fim ';*/
				/*$sql = 'SELECT jogadores.nomeJogador, jogadores.imagemJogador, rankings.rankJogador 
					FROM jogadores 
					INNER JOIN rankings 
					ON jogadores.idJogador = rankings.idJogador 
					LIMIT :inicio, :fim  

					';*/

			
				/*
				$fim=$offset * 2;
				$inicio= $fim -2;
				
				$stmt = $dbh->prepare( $sql );
				$stmt->bindParam(':inicio', $inicio, PDO::PARAM_INT);
				$stmt->bindParam(':fim', $fim, PDO::PARAM_INT);
				$stmt->execute();*/

				

				if($stmt && $stmt->rowCount() > 0){

					while( $obj = $stmt->fetchObject())
					{
					?>  
						<div class="col-6 col-md-3">
							<a href="" title="" style="color: black; text-decoration: none">
								<strong>
								<?php 
									echo $obj->nomeJogador; 
									
								?>		
								</strong></a>
							<a href="" title=""><img src="../../../gifs/<?php echo $obj->imagemJogador ?>" alt="" class="img-fluid"></a>
							<p><strong>
								<?php 
								 echo $obj->rankJogador; 
								 ?>
							</strong></p>
						</div>
						<!--
						<div class="col-6 col-md-3"> 
							<a href="" title="" style="color: black; text-decoration: none"><strong>
								<?php 
									echo $obj->nomeJogador;
								?></strong></a>
							<a href="" title=""><img src="gifs/yuki.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 2</strong></p>
						</div>-->
						<!--<div class="col-6 col-md-3 ">
							<a href="" title="" style="color: black; text-decoration: none"><strong>
								<?php 
								if( $obj->idJogador == 3)
									echo $obj->nomeJogador; ?></strong></a>
							<a href="" title=""><img src="gifs/tien.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 3</strong></p>
						</div>--><!--
						<div class="col-6 col-md-3"><!-- 220 220 
							<a href="" title="" style="color: black; text-decoration: none"><strong>Viktor AXELSEN</strong></a>
							<a href="" title=""><img src="gifs/axelsen.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 4</strong></p>
						</div>
						<div class="col-6 col-md-3">
							<a href="" title="" style="color: black; text-decoration: none"><strong>CHEN LONG</strong></a>
							<a href="" title=""><img src="gifs/chenlong.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 5</strong></p>
						</div>
						<div class="col-6 col-md-3">
							<a href="" title="" style="color: black; text-decoration: none"><strong>SON Wan Ho</strong></a>
							<a href="" title=""><img src="gifs/wanho.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 6</strong></p>
						</div>
						<div class="col-6 col-md-3">
							<a href="" title="" style="color: black; text-decoration: none"><strong>Anthony Sinisuka</strong></a>
							<a href="" title=""><img src="gifs/sinisuka.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 7</strong></p>
						</div>
						<div class="col-6 col-md-3">
							<a href="" title="" style="color: black; text-decoration: none"><strong>KIDAMBI Srikanth</strong></a>
							<a href="" title=""><img src="gifs/kidambi.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 8</strong></p>
						</div>
						<div class="col-6 col-md-3">
							<a href="" title="" style="color: black; text-decoration: none"><strong>Kenta NISHIMOTO</strong></a>
							<a href="" title=""><img src="gifs/kenta.jpg" alt="" class="img-fluid"></a>
							<p><strong>RANK 9</strong></p>
						</div>-->

						
					<?php 
					}
				}
				else
					echo 'não tem nada para mostrar';

				?>
			</div>
			<!--
			<div class="w-1">
				<a href="" class="btn btn-dark active">1</a>
				<a href="lista-dos-jogadores-M.?pg=<?php echo $obj->idpagina=2 ?>" class="btn btn-dark">2</a>
			</div>-->
	</div>

	<?php /*
	$total_paginas= ceil($aux / 2);

	

	for($i=0; $i < $total_paginas; $i++)
	{
	?>

	<a class="btn btn-dark" href="?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a>

	<?php  
	}*/
	/* BOTOES PARA PAGINACAO */
	for( $i = 1; $i <= $totalPaginas; $i++ )
	{
		if( $i == $pagina )
			echo '<a class="btn btn-dark mx-1"  href="?pagina='.$i.'">'.$i.'</a>';
		else
			echo '<a class="btn btn-outline-dark mx-1" href="?pagina='.$i.'">'.$i.'</a>';
	}
	?>
	
	

	<footer>
		<div class="container-fluid footer-container">
			<div class="row">
				<div class="col-md-4">
					<div class="card-body">
						<p>Agradeceria a sua opinião em relação ao site. Para isso só precisa de introduzir nome, email e a sua sugestão.</p>
						<p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>VMB</span>
						<span>. </span><span>Todos os Direitos Reservados</span></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-body">
						<h3 class="card-title">CONTACTO</h3>
						<p class="font-italic">iscac15764@alumni.iscac.pt</p>
					</div>
				</div>
				<div class="col-md-4">
					<form action="" method="POST" id="form-enviar-mensagem">
						<div id="card-form-mensagem">
							<h5 class="card-title" style="text-align: center">Formulário</h5>
							<div class="form-group">
								<input type="text" class="form-control " id="txt-nome" name="txtNome" required placeholder="introduza nome completo">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="txt-email" name="txtEmail" required placeholder="introduza o seu email">
							</div>
							<div class="form-group">
								<textarea name="txtMensagem" id="txt-mensagem" rows="3" class="form-control" required placeholder="intoduza aqui a sua mensagem"></textarea>
							</div>
							<button class="btn btn-outline-dark btn-block" id="btn-enviar-mensagem">Enviar Mensagem</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>

	<script src="../../../js/jquery-3.3.1.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
	<script src="../../../js/bs.js"></script>	


</body>
</html>