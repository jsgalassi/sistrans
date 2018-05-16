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
<table class="table table-striped table-hover table table-condensed">
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
$rows = $PDO->query("SELECT * FROM veiculo");
while ($row = $rows->fetch (PDO::FETCH_ASSOC))
{
echo 
"<tr>
	<td>$row[veiculo_id]</td>
	<td>$row[placa]</td>
	<td>$row[ano]</td>
	<td>$row[modelo]</td>
	<td>$row[marca]</td>
	<td>$row[cor]</td>
		
		<td><a href='view.php?veiculo_id=$row[veiculo_id]'class='btn btn-info'>Ver + Info</a>	
</tr>";
}
//echo $row Countrow();
?>
</tbody>
</table>
</div>
