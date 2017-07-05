<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<h2>Relaçao de Veiculos</h2>

<?php 
$sql = "SELECT * FROM trans.veiculo";
$result = $PDO->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_OBJ );

foreach($rows as $key =>$row) 
{
	echo $row['veiculo_id'];
	echo $row['placa'];
	echo $row['modelo'];
}
?>

<?php include_once '../inc/footer.php'; ?>