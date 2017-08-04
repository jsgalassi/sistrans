<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<h2>Editar Motorista</h2>
<hr/>
<?php
/*Linha 9 a 11 pega o ID que veio via GET e faz um SELECT para trazer no formulario apenas os dados  */
$motorista_id = $_GET['motorista_id'];
$rows1 = $PDO->query("SELECT * FROM trans.motorista m inner join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = '$motorista_id'");
$row1 = $rows1->fetch (PDO::FETCH_ASSOC);
?>
<!--Linha 14 envia dos dados alterados do formulario de edição para o arquivo edit.php via POST  -->
<form action="edit.php" method="post">
<!--Linha 16 não sei pra que serve, mais se excluir essa merda não funciona o editar  -->
<input type="hidden" class="form-control" name="motorista_id" value="<?php echo $row1['motorista_id']?>" >

<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Veiculo</label>
	<select name="veiculo_id" name="veiculo_id" class="form-control">
		<?php
		$motorista_id = $_GET['motorista_id'];
		$rows = $PDO->query("SELECT * FROM trans.motorista m inner join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = '$motorista_id'");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['veiculo_id']."> ".$row['placa']."</option>";
		}
		      
		$rows = $PDO->query("SELECT * FROM veiculo where veiculo_id <> $motorista_id");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['veiculo_id']."> ".$row['placa']."</option>";
		}
		?>
	</select>
</div>

<div class="form-group col-md-10">
	<label for="campo2">Nome do Motorista</label>
	<input type="text" class="form-control" name="nome" style="text-transform:uppercase" value="<?php echo $row1['nome']?>" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo3">CPF</label>
	<input type="text" class="form-control" name="cpf" value="<?php echo $row1['cpf']?>" required>
</div>

<div class="form-group col-md-2">
	<label for="campo4">RG</label>
	<input type="text" class="form-control" name="rg" value="<?php echo $row1['rg']?>" required>
</div>

<div class="form-group col-md-2">
	<label for="campo5">Nro da CNH</label>
	<input type="text" class="form-control" name="nro_cnh" value="<?php echo $row1['nro_cnh']?>" required>
</div>

<div class="form-group col-md-1">
	<label for="campo6">Categoria</label>
	<input type="text" class="form-control" name="tipo_cnh" style="text-transform:uppercase" value="<?php echo $row1['tipo_cnh']?>" required>
</div>
    
<div class="form-group col-md-5">
	<label for="campo7">Logradouro</label>
	<input type="text" class="form-control" name="logradouro" style="text-transform:uppercase" value="<?php echo $row1['logradouro']?>" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-1">
	<label for="campo13">Nº</label>
	<input type="text" class="form-control" name="nro" value="<?php echo $row1['nro']?>" required>
</div>

<div class="form-group col-md-4">
	<label for="campo8">Complemento</label>
	<input type="text" class="form-control" name="complemento" style="text-transform:uppercase" value="<?php echo $row1['complemento']?>">
</div>
 
<div class="form-group col-md-7">
	<label for="campo9">Bairro</label>
	<input type="text" class="form-control" name="bairro" style="text-transform:uppercase" value="<?php echo $row1['bairro']?>" required>
</div></div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo10">CEP</label>
	<input type="text" class="form-control" name="cep" style="text-transform:uppercase" value="<?php echo $row1['cep']?>" required>
</div>

<div class="form-group col-md-10">
	<label for="campo2">Cidade/UF</label>
	<select name="cidade_id" name="cidade_id" class="form-control">
		<?php
		$rows = $PDO->query("SELECT c.uf, c.nome FROM uf_cidade c join motorista m on (m.cidade_id = c.cidade_id) where motorista_id = '$motorista_id'");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['cidade_id']."> ".$row['nome']."-".$row['uf']."</option>";
		}
	
		$rows = $PDO->query("SELECT * FROM uf_cidade where cidade_id <> $motorista_id");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['cidade_id']."> ".$row['nome']."-".$row['uf']."</option>";
		}
		?>
	</select>
</div></div>

<div class="row">    
<div class="form-group col-md-12">
	<label for="campo12">Obs</label>
	<input type="text" class="form-control" name="obs" style="text-transform:uppercase" value="<?php echo $row1['obs']?>">
</div>
</div>
<center>
<div id="actions" class="row">
	<div class="col-md-12">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="listar_motoristas.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</center>
</form>

<?php include_once '../inc/footer.php'; ?>