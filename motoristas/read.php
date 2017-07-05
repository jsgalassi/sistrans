<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
  
<h2>Relação de Veiculos</h2>
<hr/>
<div class="container">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<tr>
	<th>ID</th>
	<th>Placa</th>
	<th>Nº Renavam</th>
	<th>Ano</th>
	<th>Modelo</th>
	<th>Chassi</th>
	<th>Marca</th>
	<th>Cor</th>
	<th>Descrição</th>
    </tr>
</thead>
<tbody>
<?php
$rows = $PDO->query("SELECT * FROM trans.veiculo");
while ($row = $rows->fetch (PDO::FETCH_ASSOC))
    { 
echo 
	"<tr>
		<td>$row[veiculo_id]</td>
		<td>$row[placa]</td>
		<td>$row[nro_renavam]</td>
		<td>$row[ano]</td>
		<td>$row[modelo]</td>
		<td>$row[chassi]</td>
		<td>$row[marca]</td>
		<td>$row[cor]</td>
		<td>$row[descricao]</td>
	</tr>";
	 }
?>
</div>
</tbody>


