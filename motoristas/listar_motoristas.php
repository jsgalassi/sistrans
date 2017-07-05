<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
  
<h2>Listar de Motoristas</h2>

<div class="container">
<a href="form_insert.php" class="btn btn-default">Cadastrar Novo</a>
</div>
<hr/>
<div class="container">
<div class="table-responsive">
<table class="table table-striped table-hover table-bordered">
<thead>
<tr>
	<th>ID</th>
	<th>Veiculo</th>
	<th>Nome</th>
	<th>Categoria</th>
   	<th>Açoes</th>
    </tr>
</thead>

<tbody>
<?php
$rows = $PDO->query("SELECT * FROM trans.motorista");
while ($row = $rows->fetch (PDO::FETCH_ASSOC))
{
echo 
"<tr>
	<td><h5>$row[motorista_id]</h5></td>
	<td><h5>$row[veiculo_id]</h5></td>
	<td><h5>$row[nome]</h5></td>
	<td><h5>$row[tipo_cnh]</h5></td>
		<td><h5><a href='form_motoristas_edit.php?motorista_id=$row[motorista_id]'>Editar</a> - 
		<a href='delete.php?veiculo_id=$row[motorista_id]'>Excluir</a></h5></td>
</tr>";
}
//echo $row Countrow();
?>
</tbody>
</table>
</div>