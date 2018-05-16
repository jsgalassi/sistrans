<?php include_once '../conex/conexao.php';

try 
{
	$veiculo_id = strtoupper($_POST['veiculo_id']);
	$placa = strtoupper($_POST['placa']);
	$nro_renavam = strtoupper($_POST['nro_renavam']);
	$ano = strtoupper($_POST['ano']);
	$modelo = strtoupper($_POST['modelo']);
	$chassi = strtoupper($_POST['chassi']);
	$marca = strtoupper($_POST['marca']);
	$cor = strtoupper($_POST['cor']);
        
	$descricao = strtoupper($_POST['descricao']);

	$sql = $PDO->prepare("UPDATE veiculo SET 
		placa = :placa, 
		nro_renavam = :nro_renavam,
		ano = :ano,
		modelo = :modelo,
		chassi = :chassi,
		marca = :marca,
		cor = :cor,
		descricao = :descricao
                
		WHERE 
		veiculo_id = :veiculo_id");
			$sql->bindParam(':veiculo_id', $veiculo_id);
			$sql->bindParam(':placa', $placa);
			$sql->bindParam(':nro_renavam', $nro_renavam);
			$sql->bindParam(':ano', $ano);
			$sql->bindParam(':modelo', $modelo);
			$sql->bindParam(':chassi', $chassi);
			$sql->bindParam(':marca', $marca);
			$sql->bindParam(':cor', $cor);
			$sql->bindParam(':descricao', $descricao);
                        
			$sql->execute();

	header("location: listar_veiculos.php");
}
catch
(PDOException $e)
{
	echo 'Não foi possivel realizar a alteração '. $e->getMessage();
}

?>
