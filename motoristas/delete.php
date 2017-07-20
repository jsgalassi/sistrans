<?php include_once '../conex/conexao.php';

try 
{
	$motorista_id = $_GET['motorista_id'];
	$sql = $PDO->prepare("DELETE FROM trans.motorista
			WHERE 
			motorista_id = :motorista_id");
			$sql->bindParam(':motorista_id', $motorista_id);		
			$sql->execute();
	header("location: listar_motoristas.php");
}
catch
(PDOException $e)
{
	echo 'Não foi possivel realizar a alteração '. $e->getMessage();
}

?>


