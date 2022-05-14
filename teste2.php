<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Visite o Mundo do Badminton</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href="../estilos-badminton/badminton.css">
	<link rel="stylesheet" type = "text/css" href="../estilos-badminton/responsive.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome/css/all.min.css">
	<link rel="shortcut icon"  href="../gifs/badminton.png">
	
</head>
<body>
  <?php require_once('../functions/connection.php'); ?>
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
	<h3 class="text-center p-lg-3 ">Calendário dos Torneios</h3>
<div class="container">
	<div class="row">
		<div class="p-lg-2">

      <label for="">Mês</label>
      <select name="idMes" id="idMes" class="comecar-filtrar">
        <option value="0" selected="">---Selecione---</option>
        <?php

        $sql = 'SELECT * 
        FROM mestorneio';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
         if($stmt && $stmt->rowCount()>0)
        {
            while($obj = $stmt->fetchObject())
            {?>
              <option value="<?php echo $obj->idMes?>"><?php echo $obj->mes ?></option>'

        <?php 
            }
        }

         /*
            $meses = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
            $i = 1;
            foreach ($meses as $mes) {
            */
            ?>
             <!-- <option value="<?/*php echo $i*/?>"><?/*php echo $mes*/?></option>-->
           
             
                 
              
          <?php   /*   
             $i++;
            }*/
        ?> 
      </select>




      <label for="">Continente</label>
      <select name="idContinente" id="idContinente" class="comecar-filtrar" >
        <option value="0">---Selecione---</option>
        <?php 

        $sql = 'SELECT * 
        FROM continentetorneio';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($stmt && $stmt->rowCount()>0)
        {
            while($obj = $stmt->fetchObject())
            {?>
              <option value="<?php echo $obj->idContinente?>"><?php echo $obj->nomeContinente ?></option>'

        <?php 
            }
        }
        else
          echo 'não tem nada para mostrar';
         ?>
      </select>

      <label for="">País</label>
      <select name="idPais" id="idPais" class="comecar-filtrar" >
        <option value="0">---Selecione---</option>
        <?php 

        $sql = 'SELECT paistorneio.nomePais, paistorneio.idPais 
        FROM continentetorneio,paistorneio,calendariotorneios
        where continentetorneio.idContinente = paistorneio.continentetorneio_id AND paistorneio.idPais = calendariotorneios.paistorneio_id';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        if($stmt && $stmt->rowCount()>0)
        {
            while($obj = $stmt->fetchObject())
            {?>
              <option value="<?php echo $obj->idPais?>"><?php echo $obj->nomePais ?></option>'

        <?php 
            }
        }
        else
          echo 'não tem nada para mostrar';
         ?>
        
        
      </select>
      <div id="paistorneio_id">
        
      </div>
    </div>
	</div>
	
</div>

<div class="container-fluid">
  <div class="row">
    <?php 
      $sql = 'SELECT *
      FROM continentetorneio, paistorneio, calendariotorneios 
      where continentetorneio.idContinente = paistorneio.continentetorneio_id AND paistorneio.idPais = calendariotorneios.paistorneio_id ';
      $stmt = $dbh->prepare( $sql );
      $stmt->execute();
      if($stmt && $stmt->rowCount() > 0){?>
        
        <div class="col-md-12 col-6">
          <table class="table table-hover">
            <thead>
              <tr style="text-align: center">
                <th>Continente</th>
                <th>País</th>
                <th>Cidade</th>
                <th>Nome do Torneio</th>
                <th>Data de Início do Torneio</th>
                <th>Data de Fim do Torneio</th>
              </tr>
            </thead>
            <tbody id="tbodyTorneios">
              <?php 
                while( $obj = $stmt->fetchObject())
                {
              ?>
              <tr style="text-align: center">
                <td><?php echo $obj->nomeContinente ?></td>
                <td><?php echo $obj->nomePais ?></td>
                <td><?php echo $obj->cidade ?></td>
                <td><?php echo $obj->nomeTorneio ?></td>
                <td><?php echo $obj->dataInicio ?></td>
                <td><?php echo $obj->dataFim ?></td>
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





<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
  $('.comecar-filtrar').change(function(){
  mes = $('#idMes').val();
  continente = $('#idContinente').val();
  pais = $('#idPais').val();
console.log(pais)
   $.ajax({
          method: 'POST',
          url: 'consultas_ajax.php',
          data:{ mes: mes, continente:continente, pais:pais },
          /*datatype: 'JSON',*/
          success: function(data){
            //console.log(data)
            $('#tbodyTorneios').html(data);
            
          },
          error: function()
          {}
        });


});
 /* $( documentVVV ).ready(function() {
     var mesSelect = $('#idMes');
      var continenteSelecte = $('#idContinente');
      var psidselect = $('#idPais');

      mesSelect.on('change', function() {
        var mes = $(this).val();

        $.ajax({
          method: 'GET',
          url: 'consultas_ajax.php?mes='+mes,
          success: function(data){
            var torneios = jQuery.parseJSON(data);
            var html = '';
            for (var i = 0; i < torneios.length; i++) {
              html += '<tr style="text-align: center">';
              html += '<td><'+torneios[i].+'></td>
                <td><?php echo $obj->nomePais ?></td>
                <td><?php echo $obj->cidade ?></td>
                <td><?php echo $obj->nomeTorneio ?></td>
                <td><?php echo $obj->dataInicio ?></td>
                <td><?php echo $obj->dataFim ?></td>
              </tr>'
            }
          }
        });

      });
  });
*/
 

</script>
</body>
</html>