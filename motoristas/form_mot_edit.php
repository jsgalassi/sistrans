<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<h2>Editar Motorista</h2>
<hr/>
<?php
/*Linha 9 a 11 pega o ID que veio via GET e faz um SELECT para trazer no formulario apenas os dados  */
$motorista_id = $_GET['motorista_id'];
$rows = $PDO->query("SELECT * FROM trans.motorista m inner join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = '$motorista_id'");
$row = $rows->fetch (PDO::FETCH_ASSOC);
?>
<!--Linha 14 envia dos dados alterados do formulario de edição para o arquivo edit.php via POST  -->
<form action="edit.php" method="post">
<!--Linha 16 não sei pra que serve, mais se excluir essa merda não funciona o editar, o input do tipo text é para levar o numero do ID confirmando que esta sendo editado o veiculo correto -->
<div class="row">
<div class="col-md-1">
<input type="text" class="form-control" name="motorista_id" value="<?php echo $row['motorista_id']?>" disabled>
</div>
</div>
<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Veiculo</label>
	<select name="veiculo_id" class="form-control">
		<?php
		$rows = $PDO->query("SELECT m.veiculo_id, v.placa FROM trans.motorista m join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = '$motorista_id'");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['veiculo_id']."> ".$row['placa']."</option>";
		}
		      
		$rows = $PDO->query("SELECT * FROM trans.veiculo");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['veiculo_id']."> ".$row['placa']."</option>";
		}
		?>
	</select>
</div>





<center>
<div id="actions" class="row">
	<div class="col-md-12">
		<button type="submit" value="post" class="btn btn-primary">Salvar</button>
		<a href="listar_motoristas.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</center>
</form>

<?php include_once '../inc/footer.php'; ?>