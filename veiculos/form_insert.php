<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<h2>Cadastro de Veiculos</h2>

<form action="insert.php" method="post">
<hr/>

<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Placa</label>
    <input type="text" class="form-control" name="placa" required>
</div>
</div>
  
<div class="row">    
<div class="form-group col-md-2">
	<label for="campo2">Numero do Renavam</label>
	<input type="text" class="form-control" name="nro_renavam" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo3">Ano de Fabricação</label>
	<input type="text" class="form-control" name="ano" required>
</div>
</div>

<div class="row">
<div class="form-group col-md-6">
	<label for="campo4">Modelo</label>
	<input type="text" class="form-control" name="modelo" required>
</div>
</div>

<div class="row">
<div class="form-group col-md-2">
	<label for="campo5">Chassi</label>
	<input type="text" class="form-control" name="chassi" required>
</div>
</div>    

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo6">Marca</label>
	<input type="text" class="form-control" name="marca" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo7">Cor</label>
	<input type="text" class="form-control" name="cor" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-12">
	<label for="campo5">Descrição do Veiculo</label>
	<input type="text" class="form-control" name="descricao">
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
