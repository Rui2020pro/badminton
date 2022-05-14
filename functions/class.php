<?php /*
class display
{

	private $database;
	function _construct($dbh)
	{
		$this->database=$dbh;
	}

	public function show($result)
	{

		$stmt = $this->database->prepare($result);
		$stmt->execute();

		if($stmt->rowCount() > 0){
			while($row-$stmt->fetch(PDO::FETCH_ASSOC))
			{
				extract($row);
				echo $nomeJogador;
				echo $imagemJogador;
				echo '<br /> ';
			}
		}
		else{
			echo 'Nenhum resultado encontrado';
		}
	}*/











 ?>