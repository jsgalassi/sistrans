<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
  
<h2>Listagem de Veiculos</h2>

<div class="container">
    <a href="form_veiculos.php" class="btn btn-default">Cadastrar Novo</a>
</div>
<hr/>
<div class="container">
<div class="table-responsive">
<table class="table table-striped table-hover table-bordered">
<thead>
<tr>
	<th>Matricula</th>
	<th>Placa</th>	
	<th>Ano</th>
	<th>Modelo</th>
	<th>Marca</th>
	<th>Cor</th>
   	<th>Ações</th>
    </tr>
</thead>

<tbody>
<?php
$rows = $PDO->query("SELECT * FROM trans.veiculo");
while ($row = $rows->fetch (PDO::FETCH_ASSOC))
{
echo 
"<tr>
	<td><h5>$row[veiculo_id]</h5></td>
	<td><h5>$row[placa]</h5></td>
	<td><h5>$row[ano]</h5></td>
	<td><h5>$row[modelo]</h5></td>
	<td><h5>$row[marca]</h5></td>
	<td><h5>$row[cor]</h5></td>
		
		<td><h5><a href='view.php?veiculo_id=$row[veiculo_id]'class='btn btn-default'>Visualizar</a>
		<a href='form_edit.php?veiculo_id=$row[veiculo_id]'class='btn btn-primary'>Editar</a>
		<a href='delete.php?veiculo_id=$row[veiculo_id]'class='btn btn-danger'>Excluir</a></h5></td>
</tr>";
}

?>
</tbody>
</table>
</div>
