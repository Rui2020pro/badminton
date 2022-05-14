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
	
<body>
	<div class="support-buttons">
		<a href="#" class="btn btn-primary"><i class="fa fa-user"></i> <strong>Your Account</strong></a>
		<a href="#" class="btn btn-default"><i class="fa fa-life-ring"></i> <strong>Help Center</strong></a>
		<a href="#" class="btn btn-default"><i class="fa fa-list-alt"></i> <strong>Changelogs</strong></a>
		<a href="#" class="btn btn-default"><i class="fa fa-envelope-o"></i> <strong>Contact Us</strong></a>
		<a href="#" class="btn btn-default"><i class="fa fa-envelope-o"></i> <strong>Contact Us</strong></a>
	</div>
	
	
	<?php require_once('../functions/connection.php'); ?>
	<?php 

	$result = "SELECT * FROM jogadores";
	/*$display->show($result);*/


	 ?>

<!--
	<div class="container">
  <h2>Activate Carousel with JavaScript</h2>
  <div id="myCarousel" class="carousel slide">
     Indicators 
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    Wrapper for slides 
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img_chania.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="img_chania2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img_flower.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

     Left and right controls 
    <a class="left carousel-control"  role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>-->

	

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

	
	


	<!--<div class="container-centrado">
		<div class="jumbotron-fluid; p-3 mb-0 font-italic">

			<h2 class="display-4">Visit the World Of Badminton</h2>

		</div>
	</div>-->

	<nav class="navbar navbar-expand-md navbar-dark bg-dark py-md-0 sticky-top">
	
	<a class="navbar-brand ml-3" href="../badminton">VMB</a><!-- index.php -->

	<button class="navbar-toggler ml-4" type="button" 
			data-toggle="collapse" data-target="#menu-principal">
				<span class="navbar-toggler-icon"></span>
			</button>	

	<div class="collapse navbar-collapse " id="menu-principal">
		<div class="navbar-nav ">
			
			<a class="nav-item nav-link" href="rankings.php" >RANKINGS</a>
			<a class="nav-item nav-link" href="noticias.php">NOTÍCIAS</a>
			<a class="nav-item nav-link" href="#">CALENDÁRIO</a>
			<!--<a class="nav-item nav-link" href="historia.php">HISTÓRIA</a>
			<a class="nav-item nav-link" href="regras.php">REGRAS</a>
			<a class="nav-item nav-link" href="golpes-servicos.php">Golpes/Serviços</a>-->
			<a class="nav-item nav-link" href="#">JOGADORES</a>
			<a class="nav-item nav-link" href="videos.php">VÍDEOS</a>
			
			<div class="btn-group ">
					
					<li class="nav-item nav-link" >
					
					<!--<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mais Info
					</button>-->
						<a class="btn nav-link dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais Info</a>
							<div class="dropdown-menu " >
								<a class="dropdown-item" href="historia.php" "História">História</a>
								<a class="dropdown-item" href="regras.php" "Regras">Regras</a>
								<a class="dropdown-item" href="golpes-servicos.php" "Golpes/Serviços">Golpes/Serviços</a>
							</div>
						</a>
					<!--
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">		
				      <a class="dropdown-item" href="historia.php">HISTÓRIA</a>
				      <a class="dropdown-item" href="regras.php">REGRAS</a>
					  <a class="dropdown-item" href="golpes-servicos.php">Golpes/Serviços</a>
					</div>-->
				  
				</li>
			</div>
			<li class="nav-item">
				<div class="d-flex justify-content-center h-100">
					<div class="searchbar">
						<input class="search_input" type="text" name="" placeholder="Search...">
						<i class="fas fa-search" style="color: white"></i>
					</div>
				</div>
			</li>

			<!--<ul class="nav nav-tabs">
				<li class="nav-item dropdown">	
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>
				    <div class="dropdown-menu">
				      <a class="dropdown-item" href="historia.php">HISTÓRIA</a>
				      <a class="dropdown-item" href="regras.php">REGRAS</a>
					  <a class="dropdown-item" href="golpes-servicos.php">Golpes/Serviços</a>
				    </div>
				</li>
			</ul>--><!--
			<div class="btn-group btn-dark">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		            More <span class="caret"></span>
		        </button>
		        <ul class="dropdown-menu" role="menu">
		        	<li><a href="historia.php">HISTÓRIA</a></li>
		        	<li><a  href="regras.php">REGRAS</a></li>
		        	<li><a href="golpes-servicos.php">Golpes/Serviços</a></li>
		        </ul>
			</div>-->
			
		</div>
	</div>
	</nav>
	<?php /*
	$key = $_POST['title'];
	$result = "SELECT * FROM jogadores 
	WHERE nomeJogador 
	LIKE '%%nomeJogador%%";*/


	/*
			$campos_query = "*";
			$final_query = 'SELECT * FROM jogadores,rankings 
					where  jogadores.idJogador = rankings.idJogador ';
			$maximo = 2;
			$pagina = $_GET["pagina"];
			if($pagina == "") {
		    	$pagina = "1";

			$inicio = $pagina - 1;
			$inicio = $maximo * $inicio;

			$strCount = "SELECT COUNT(*) AS 'num_registos' $final_query";
			$query = mysql_query($strCount);
			$row = mysql_fetch_array($query);
			$total = $row["num_registos"];	

			$sql = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");
			while ($linha = mysql_fetch_object($sql)) {
					echo "<b>" . $linha->nomeJogador . "</b> (R$ ". $linha->imagemJogador.")<br />";
			}
			$menos = $pagina - 1;
			$mais = $pagina + 1;
			 
			$pgs = ceil($total / $maximo);
			 
			if($pgs > 1 ) {
			 
				echo "<br />";
			 
			    // Mostragem de pagina
			    if($menos > 0) {
					echo "<a href=".$_SERVER['PHP_SELF']."?pagina=$menos>anterior</a>&nbsp; ";
			    }
			 
			    // Listando as paginas
				for($i=1;$i <= $pgs;$i++) {
					if($i != $pagina) {
						echo " <a href=".$_SERVER['PHP_SELF']."?pagina=".($i).">$i</a> | ";
					} else {
						echo " <strong>".$i."</strong> | ";
					}
				}
			 
				if($mais <= $pgs) {
					echo " <a href=".$_SERVER['PHP_SELF']."?pagina=$mais>próxima</a>";
				}
			}
*/
	?>
	<!--
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 ">
			<?php 
			/*
			$sql = 'SELECT * FROM noticias ORDER BY idNoticia';
			$stmt = $dbh->prepare( $sql );
			$stmt->execute();

			if( $stmt && $stmt->rowCount() > 0){*/
			 ?>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li class="item1 active"></li>
						    <li class="item2"></li>
						    <li class="item3"></li>
						    <li class="item4"></li>
						</ol><?php  
							/*while( $obj = $stmt->fetchObject() )
							{*/?>
						<div class="carousel-inner" role="listbox">
							
							<div class="item active ">
								<img src="noticias/<?php /*echo $obj->imagemCarousel ?>" alt="">
								<div class="carousel-caption">
									<h2 style="color: green"><?php echo $obj->tituloNoticia ?></h2>
									<p><?php echo $obj->descricaoNoticia*/ ?></p>
								</div>
							</div>
							<div class="item ">
								<img src="noticias/segundanoticia.jpg" alt="">
								<div class="carousel-caption">
									<h2 style="color: green">Pranoy</h2>
									<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
								</div>
							</div>
							<div class="item " >
								<img src="noticias/terceiranoticia.jpg" alt="">
								<div class="carousel-caption">
									<h2 style="color: green">Pranoy</h2>
									<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
								</div>
							</div>
							<div class="item  " >
								<img src="noticias/quartanoticia.jpg" alt="">
								<div class="carousel-caption">
									<h2 ><a href="rankings.php" >Momota</a></h2>
									<a href="rankings.php" "email me"><p>sss</p></a>
								</div>
							</div>
							<?php 
						/*	} */?>
						</div>
						<a class="left carousel-control"  role="button">
					      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" role="button">
					      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
					    </a>
					</div>	
			<?php /* } */?>
		</div>	
	</div>	
</div>
<div class="container-fluid">
	<div class="row">
		<?php 
	/*
			$sql = 'SELECT * FROM noticias ORDER BY idNoticia';
			$stmt = $dbh->prepare( $sql );
			$stmt->execute();

			if( $stmt && $stmt->rowCount() > 0)
			{
			 	while( $obj = $stmt->fetchObject())
			 		{?>
						 <div class="col-12 col-lg-6">
							<div class="media noticia">
								<a href=""><img src="noticias/<?php echo $obj->imagemDescNoticia ?>" alt="" class="mt-3 mr-3"></a>
								<div class="media-body">
									<h2><?php echo $obj->tituloNoticia ?></h2>
									<p class="mb-0"><?php echo $obj->descricaoNoticia ?></p>
									<p class="mb-0" ><a href="" class="btn btn-link pl-0">[ver +]</a></p>
									<p class="text-muted"><?php echo $obj->updated_at ?></p>
								</div>
							</div>
						</div>
			 		<?php */
					/*}
		  	} */?>
		
		
		<div class="col-12 col-lg-6">
			<div class="media noticia">
				<a href=""><img src="noticias/segundanoticiadesc.jpg" alt="" class="mt-3 mr-3"></a>
				<div class="media-body">
					<h2>China e Japão no Topo</h2>
					<p class="mb-0">China e Japão <br>estão no topo</p>
					<p class="mb-0"><a href="" class="btn btn-link pl-0">[ver +]</a></p>
					<p class="text-muted">19/09/2018</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="media noticia">
				<a href=""><img src="noticias/terceiranoticiadesc.jpg" alt="" class="mt-3 mr-3"></a>
				<div class="media-body">
					<h2>China e Japão no Topo</h2>
					<p class="mb-0">China e Japão <br>estão no topo</p>
					<p class="mb-0"><a href="" class="btn btn-link pl-0">[ver +]</a></p>
					<p class="text-muted">19/09/2018</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="media noticia">
				<a href=""><img src="noticias/quartanoticiadesc.jpg" alt="" class="mt-3 mr-3"></a>
				<div class="media-body">
					<h2>China e Japão no Topo</h2>
					<p class="mb-0">China e Japão <br>estão no topo</p>
					<p class="mb-0"><a href="" class="btn btn-link pl-0">[ver +]</a></p>
					<p class="text-muted">19/09/2018</p>
				</div>
			</div>	
		</div>
		
		
	</div>
	
</div>-->
<!--
<script>
$(document).ready(function(){

  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators

  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 p-lg-5">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">		
				<div class="carousel-inner">
					<?php 

					$sql = 'SELECT noticias.idNoticia,noticias.imagemCarousel 
							FROM noticias';
					$stmt = $dbh->prepare($sql);
					$stmt->execute();	
					$i=1;

					if($stmt && $stmt->rowCount()>0){
						while($obj = $stmt->fetchObject()){
					 	if($i == 1) $active = 'active';
					 	else $active = '';
					 	
					 	?>
					
					    <div class="carousel-item <?php echo $active ?>">
					      <img  class="img-fluid"src="../noticias/<?php 			      
					      	echo $obj->imagemCarousel ?>" alt="First slide">
					    </div>
					   
					<?php 
						$i++;
						}
					}
					else
						echo 'Não tem nada para mostrar';

					?>    
				</div>
				  <a class="left carousel-control-prev " role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control-next"  role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		</div>
			
	</div>
</div>
<p></p>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-12 pl-5">
			<div class="media">
				<a href=""><img class="img-not img-fluid" src="../noticias/primeiranoticia.jpg" alt="" class="mt-3"></a>
				<a href=""><img class="img-not-teste img-fluid" src="../noticias/responsiveprimeira.jpg" alt="" class="mt-3"></a>			
				<a href=""><img class="img-not-teste2 img-fluid" src="../noticias/responsiveprimeira.jpg" alt="" class="mt-3"></a>
				<div class="media-body img-not">
					<h2 class="mt-3">China e Japão no Topo</h2>
					<p >China e Japão estão no Topo Mundial <br> WORLD CUP</p>
					<p ><a href="" class="btn btn-link pl-0">[ver +]</a></p>
					<p class="text-muted">19/09/2018</p>
				</div>
			</div>
			<div class="img-not-teste img-not-teste2">
				<h2 style="text-align: center">China e Japão no Topo</h2>
				<p>China e Japão estão no Topo Mundial (WORLD CUP)</p>
				<a href="" class="btn btn-link pl-0">[ver +]</a>
				<p class="text-muted" style="text-align: right;">19/09/2018</p>
			</div>	
		</div>
		<div class="col-md-6 col-12 pl-5">
			<div class="media">
				<a href=""><img class="img-not img-fluid" src="../noticias/segundanoticia.jpg" alt="" class="mt-3"></a>
				<a href=""><img class="img-not-teste img-fluid" src="../noticias/responsivesegunda.jpg" alt="" class="mt-3"></a>			
				<a href=""><img class="img-not-teste2 img-fluid" src="../noticias/responsivesegunda.jpg" alt="" class="mt-3"></a>
				<div class="media-body img-not">
					<h2 class="mt-3">China e Japão no Topo</h2>
					<p >China e Japão estão no Topo Mundial <br> WORLD CUP</p>
					<p ><a href="" class="btn btn-link pl-0">[ver +]</a></p>
					<p class="text-muted">19/09/2018</p>
				</div>
			</div>
			<div class="img-not-teste img-not-teste2">
				<h2 style="text-align: center">China e Japão no Topo</h2>
				<p>China e Japão estão no Topo Mundial (WORLD CUP)</p>
				<a href="" class="btn btn-link pl-0">[ver +]</a>
				<p class="text-muted" style="text-align: right;">19/09/2018</p>
			</div>	
		</div>
		<div class="col-md-6 col-12 pl-5">
			<div class="media">
				<a href=""><img class="img-not img-fluid" src="../noticias/terceiranoticia.jpg" alt="" class="mt-3"></a>
				<a href=""><img class="img-not-teste img-fluid" src="../noticias/responsiveterceira.jpg" alt="" class="mt-3"></a>	
				<a href=""><img class="img-not-teste2 img-fluid" src="../noticias/responsiveterceira.jpg" alt="" class="mt-3"></a>
				<div class="media-body img-not">
					<h2 class="mt-3">China e Japão no Topo</h2>
					<p >China e Japão estão no Topo Mundial <br> WORLD CUP</p>
					<p ><a href="" class="btn btn-link pl-0">[ver +]</a></p>
					<p class="text-muted">19/09/2018</p>
				</div>
			</div>
			<div class="img-not-teste img-not-teste2">
				<h2 style="text-align: center">China e Japão no Topo</h2>
				<p>China e Japão estão no Topo Mundial (WORLD CUP)</p>
				<a href="" class="btn btn-link pl-0">[ver +]</a>
				<p class="text-muted" style="text-align: right;">19/09/2018</p>
			</div>	
		</div>
		<div class="col-md-6 col-12 pl-5 ">
			<div class="media">
				<a href=""><img src="../noticias/quartanoticia.jpg" class="img-not img-fluid"alt="" class="mt-3"></a>
				<a href=""><img class="img-not-teste img-fluid" src="../noticias/responsivequarta.jpg" alt="" class="mt-3"></a>
				<a href=""><img class="img-not-teste2 img-fluid" src="../noticias/responsivequarta.jpg" alt="" class="mt-3"></a>
				<div class="media-body img-not">
					<h2 class="mt-3">China e Japão no Topo</h2>
					<p >China e Japão estão no Topo Mundial <br> WORLD CUP</p>
					<p ><a href="" class="btn btn-link pl-0">[ver +]</a></p>
					<p class="text-muted">19/09/2018</p>
				</div>
			</div>
			<div class="img-not-teste img-not-teste2">
				<h2 style="text-align: center">China e Japão no Topo</h2>
				<p>China e Japão estão no Topo Mundial (WORLD CUP)</p>
				<a href="" class="btn btn-link pl-0">[ver +]</a>
				<p class="text-muted" style="text-align: right;">19/09/2018</p>
			</div>
		</div>
	</div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</script>
<script>
$(document).ready(function(){
	$(".left").click(function(){
		$("#carouselExampleSlidesOnly").carousel("prev");
  	});
  	$(".right").click(function(){
    	$("#carouselExampleSlidesOnly").carousel("next");
  	});

});
</script>	
<!--
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> v4.1.3
<script src="js/bs.js"></script>-->	
</body>
</html>