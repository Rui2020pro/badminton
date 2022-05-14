<?php 
/* validar tipo de acesso ajax/post */

/*obter dados*/

/* se ele realmente foi passado vou buscar */

require_once 'config/db.php';

if(	isset( $_POST['nome'] ) ) $nome = $_POST['nome']; 
else $nome = 0;
if(	isset( $_POST['email'] ) ) $email = $_POST['email'];
else $email = 0;
if(	isset( $_POST['mensagem'] ) ) $msg = $_POST['mensagem'];
else $msg = 0;


if( $nome === 0 || $email === 0 || $msg === 0)
{
	echo 1;
	die();

}


else
{
	//inserir na base de dados
	
	$sql = 'INSERT INTO mensagemutilizador (nome, email, mensagem) 
	VALUES( :nome, :email, :msg)';
	/*fazer a ligação de todos os parametros*/ /*bindValue era valores fixos */
	$stmt = $con->prepare( $sql );
	$stmt->bindParam( ':nome', $nome);
	$stmt->bindParam( ':email', $email);
	$stmt->bindParam( ':msg', $msg);
	$stmt->execute();

	if( $stmt && $stmt->rowCount() == 1)
	{
		echo 0;
		//echo 'inserido'; 
		/* não quer dizer que esteja inserido na base de dados.
		 Mas tem de se verificar na base de dados*/
	}
	else echo 1;
	die();
}



?>
