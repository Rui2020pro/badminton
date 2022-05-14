<?php require_once('../functions/connection.php'); 

$idContinente = $_REQUEST['idContinente'];
$result = 'SELECT calendariotorneios.idTorneio, calendariotorneios.paistorneio_id, calendariotorneios.cidade, calendariotorneios.mes_id
FROM calendariotorneios, continentetorneio, mestorneio, paistorneio
WHERE mesTorneio.idMes = calendariotorneios.mes_id, continentetorneio.idContinente = paistorneio.continentetorneio_id, paistorneio.idPais = calendariotorneios.paistorneio_id
ORDER BY nomePais';
$stmt = $dbh->prepare($sql);
$stmt->execute();


?>