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
		
			$sql->bindValue(':motorista_id', $motorista_id);
			$sql->bindValue(':veiculo_id', $veiculo_id);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':cpf', $cpf);
			$sql->bindValue(':rg', $rg);
			$sql->bindValue(':nro_cnh', $nro_cnh);
			$sql->bindValue(':tipo_cnh', $tipo_cnh);
			$sql->bindValue(':logradouro', $logradouro);
			$sql->bindValue(':nro', $nro);
			$sql->bindValue(':complemento', $complemento);
			$sql->bindValue(':bairro', $bairro);
			$sql->bindValue(':cep', $cep);
			$sql->bindValue(':cidade_id', $cidade_id);
			$sql->bindValue(':obs', $obs);
			$sql->execute();

	header("location: listar_motoristas.php");
}
catch
(PDOException $sql)
{
	echo 'Não foi possivel realizar a alteração '. $sql->getMessage();
}

?>
