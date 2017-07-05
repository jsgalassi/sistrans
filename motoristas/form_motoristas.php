<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<h2>Cadastro de Motoristas</h2>

<form action="insert.php" method="post">
<hr/>

<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Veiculo</label>
	<select name="veiculo_id" name="veiculo_id" class="form-control">
		<?php
		$rows = $PDO->query("SELECT placa, veiculo_id FROM trans.veiculo");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['veiculo_id']."> ".$row['placa']."</option>";
		}
		?>
	</select>
</div>

<div class="form-group col-md-10">
	<label for="campo2">Nome do Motorista</label>
	<input type="text" class="form-control" name="nome" style="text-transform:uppercase" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo3">CPF</label>
	<input type="text" class="form-control" name="cpf" required>
</div>

<div class="form-group col-md-2">
	<label for="campo4">RG</label>
	<input type="text" class="form-control" name="rg" required>
</div>

<div class="form-group col-md-2">
	<label for="campo5">Nro da CNH</label>
	<input type="text" class="form-control" name="nro_cnh" required>
</div>

<div class="form-group col-md-1">
	<label for="campo6">Categoria</label>
	<input type="text" class="form-control" name="tipo_cnh" style="text-transform:uppercase" required>
</div>
    
<div class="form-group col-md-5">
	<label for="campo7">Logradouro</label>
	<input type="text" class="form-control" name="logradouro" style="text-transform:uppercase" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-1">
	<label for="campo13">Nº</label>
	<input type="text" class="form-control" name="nro" required>
</div>

<div class="form-group col-md-4">
	<label for="campo8">Complemento</label>
	<input type="text" class="form-control" name="complemento" style="text-transform:uppercase">
</div>
 
<div class="form-group col-md-7">
	<label for="campo9">Bairro</label>
	<input type="text" class="form-control" name="bairro" style="text-transform:uppercase" required>
</div></div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo10">CEP</label>
	<input type="text" class="form-control" name="cep" style="text-transform:uppercase" required>
</div>

<div class="form-group col-md-10">
	<label for="campo2">Cidade/UF</label>
	<select name="cidade_id" name="cidade_id" class="form-control">
		<?php
		$rows = $PDO->query("SELECT nome, uf, cidade_id FROM trans.uf_cidade");
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
	<input type="text" class="form-control" name="obs" style="text-transform:uppercase">
</div>
</div>


<center>
<div id="actions" class="row">
	<div class="col-md-12">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="manfrete.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</center>
</form>

<?php include_once '../inc/footer.php'; ?>
