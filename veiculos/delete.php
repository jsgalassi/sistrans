<?php include_once '../conex/conexao.php';

try 
{
	$veiculo_id = isset($_GET['veiculo_id']) ? $_GET['veiculo_id'] : null;
	if (empty($veiculo_id)) {
		echo "ID não informado";
		exit;
	}
	$sql = $PDO->prepare("DELETE FROM veiculo
			WHERE 
			veiculo_id = :veiculo_id");
			$sql->bindParam(':veiculo_id', $veiculo_id);		
			$sql->execute();
	header("location: listar_veiculos.php");
}
catch
(PDOException $e)
{
	echo 'Não foi possivel realizar a alteração '. $e->getMessage();
}

?>


