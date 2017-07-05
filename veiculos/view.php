<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<h2>Informações</h2>
<hr/>
<?php
/*Linha 9 a 11 pega o ID que veio via GET e faz um SELECT para trazer no formulario apenas os dados  */
$veiculo_id = $_GET['veiculo_id'];
$rows = $PDO->query("SELECT * FROM trans.veiculo where veiculo_id = '$veiculo_id'");
$row = $rows->fetch (PDO::FETCH_ASSOC);
?>
<!--Linha 14 envia dos dados alterados do formulario de edição para o arquivo edit.php via POST  -->
<form action="edit.php" method="post">

<div class="row">
<div class="form-group col-md-1">
	<label for="campo1">Matricula</label>
	<input type="text" class="form-control" name="veiculo_id" value="<?php echo $row['veiculo_id']?>" disabled>
</div>
</div>	
	
<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Placa</label>
    <input type="text" class="form-control" name="placa"  style="text-transform:uppercase"  value="<?php echo $row['placa']?>" disabled>
</div>
</div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo2">Numero do Renavam</label>
	<input type="number" class="form-control" name="nro_renavam" value="<?php echo $row['nro_renavam']?>" disabled>
</div>

<div class="form-group col-md-2">
	<label for="campo3">Ano de Fabricação</label>
	<input type="number" class="form-control" name="ano" value="<?php echo $row['ano']?>" disabled>
</div>

<div class="form-group col-md-6">
	<label for="campo4">Modelo</label>
	<input type="text" class="form-control" name="modelo"  style="text-transform:uppercase"  value="<?php echo $row['modelo']?>" disabled>
</div>

<div class="form-group col-md-2">
	<label for="campo5">Chassi</label>
	<input type="text" class="form-control" name="chassi"  style="text-transform:uppercase"  value="<?php echo $row['chassi']?>" disabled>
</div>
</div>    

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo6">Marca</label>
	<input type="text" class="form-control" name="marca"  style="text-transform:uppercase"  value="<?php echo $row['marca']?>" disabled>
</div>

<div class="form-group col-md-2">
	<label for="campo7">Cor</label>
	<input type="text" class="form-control" name="cor"  style="text-transform:uppercase"  value="<?php echo $row['cor']?>" disabled>
</div>


<div class="form-group col-md-8">
	<label for="campo5">Descrição do Veiculo</label>
	<input type="text" class="form-control" name="descricao" style="text-transform:uppercase"  value="<?php echo $row['descricao']?>" disabled>
</div>
</div>

<center>
<div id="actions" class="row">
	<div class="col-md-12">
	<!--Linha 76 não sei pra que serve, mais se excluir essa merda não funciona o editar  -->
		
		
		<a href="read.php" class="btn btn-success">Voltar</a>
</div>
</div>
</center>
</form>

<?php include_once '../inc/footer.php'; ?>
