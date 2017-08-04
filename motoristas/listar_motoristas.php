<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php';?>
<?php include_once '../conex/conexao.php';?>
  
<h2>Listar Motoristas</h2>

<div class="container">
<a href="form_motoristas.php" class="btn btn-default">Cadastrar Novo</a>
</div>
<hr/>
<div class="container">
<div class="table-responsive">
<table class="table table-striped table-hover table-bordered table-condensed">
<thead>
<tr>
	<th>ID</th>
	<th>Veiculo</th>
	<th>Nome</th>
	<th>CPF</th>
   	<th>Nro CNH</th>
    <th>Tipo</th>
    <th>Cidade</th>      
    <th>Ações</th>
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
	<td><h5>$row[cpf]</h5></td>
	<td><h5>$row[nro_cnh]</h5></td>
	<td><h5>$row[tipo_cnh]</h5></td>
	<td><h5>$row[cidade_id]</h5></td>
		<td><h5><a href='form_mot_edit.php?motorista_id=$row[motorista_id]'>Editar</a> - 
		<a href='delete.php?motorista_id=$row[motorista_id]'>Excluir</a></h5></td>
</tr>";
}
//echo $row Countrow();
?>
</tbody>
</table>
</div>
