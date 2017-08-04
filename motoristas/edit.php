<?php include_once '../conex/conexao.php';


/*UPDATE `trans`.`motorista` SET `veiculo_id`='25', `nome`='JEF', `cpf`='050.670.449-18', `rg`='9 130 900 9', `nro_cnh`='0000000000', `tipo_cnh`='A B', `logradouro`='RUA SEBASTIAO ROBERTO', `complemento`='N', `bairro`='JARDIM COLUMBIA', `cep`='86057-130', `cidade_id`='4101' WHERE `motorista_id`='6';
*/
try 
{
	$motorista_id = strtoupper($_POST['motorista_id']);
	$veiculo_id = ($_POST['veiculo_id']);
	$nome = strtoupper($_POST['nome']);
	$cpf = strtoupper($_POST['cpf']);
	$rg = strtoupper($_POST['rg']);
	$nro_cnh = strtoupper($_POST['nro_cnh']);
	$tipo_cnh = strtoupper($_POST['tipo_cnh']);
	$logradouro = strtoupper($_POST['logradouro']);
	$nro = strtoupper($_POST['nro']);
	$complemento = strtoupper($_POST['complemento']);
	$bairro = strtoupper($_POST['bairro']);
	$cep = strtoupper($_POST['cep']);
	$cidade_id = ($_POST['cidade_id']);
	$obs = strtoupper($_POST['obs']);

	$sql = $PDO->prepare("UPDATE trans.motorista SET 
		motorista_id = :motorista_id,
		veiculo_id = :veiculo_id, 
		nome = :nome,
		cpf = :cpf,
		rg = :rg,
		nro_cnh = :nro_cnh,
		tipo_cnh = :tipo_cnh,
		logradouro = :logradouro,
		nro = :nro,
		complemento = :complemento,
		bairro = :bairro,
		cep = :cep,
		cidade_id = :cidade_id,	
		obs = :obs
		WHERE 
		motorista_id = :motorista_id");
		
			$sql->bindParam(':motorista_id', $motorista_id);
			$sql->bindParam(':veiculo_id', $veiculo_id);
			$sql->bindParam(':nome', $nome);
			$sql->bindParam(':cpf', $cpf);
			$sql->bindParam(':rg', $rg);
			$sql->bindParam(':nro_cnh', $nro_cnh);
			$sql->bindParam(':tipo_cnh', $tipo_cnh);
			$sql->bindParam(':logradouro', $logradouro);
			$sql->bindParam(':nro', $nro);
			$sql->bindParam(':complemento', $complemento);
			$sql->bindParam(':bairro', $bairro);
			$sql->bindParam(':cep', $cep);
			$sql->bindParam(':cidade_id', $cidade_id);
			$sql->bindParam(':obs', $obs);
			$sql->execute();

	header("location: listar_motoristas.php");
}
catch
(PDOException $e)
{
	echo 'Não foi possivel realizar a alteração '. $e->getMessage();
}

?>
