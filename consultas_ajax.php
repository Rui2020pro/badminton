<?php 

require_once('../functions/connection.php');
$html = '';
$mes 		= $_POST['mes'];
$continente = $_POST['continente'];
$pais 		= $_POST['pais'];



 $sql = 'SELECT * FROM calendariotorneios c, paistorneio t, continentetorneio x 
		WHERE  c.paistorneio_id = t.idPais AND t.continentetorneio_id = x.idContinente ';
if( $mes != 0 ) ' AND c.mes_id=:mes ';
if($continente != 0 ) ' AND t.continente_id=:continente ';
if($pais != 0 ) ' AND c.pais_id=:pais ';
$stmt = $dbh->prepare( $sql );
if( $mes != 0 ) 		$stmt->bindParam( ':mes', $mes );
if($continente != 0 ) 	$stmt->bindParam( ':continente', $continente );
if($pais != 0 ) 		$stmt->bindParam( ':pais', $pais );
$stmt->execute();

if($stmt )
{
		
		while( $obj = $stmt->fetchObject()) 
		{
			$html .= '<tr style="text-align: center">';
            $html .= '<td>'.$obj->nomeContinente.'</td>';
            $html .= '<td>'.$obj->nomePais.'</td>';
            $html .= '<td>'.$obj->cidade.'</td>';
            $html .= '<td>'.$obj->nomeTorneio.'</td>';
            $html .= '<td>'.$obj->dataInicio.'</td>';
            $html .= '<td>'.$obj->dataFim .'</td>';
            $html .= '</tr>';
		}

}	
/*echo json_encode($html);*/
echo($html);
?>