<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
<?php include_once 'form_veiculos.php';?>

<?php
$placa = strtoupper($_POST['placa']);
$nro_renavam = strtoupper($_POST['nro_renavam']);
$ano = strtoupper($_POST['ano']);
$modelo = strtoupper($_POST['modelo']);
$chassi = strtoupper($_POST['chassi']);
$marca = strtoupper($_POST['marca']);
$cor = strtoupper($_POST['cor']);
$descricao = strtoupper($_POST['descricao']);

$sql = "insert into trans.veiculo
(
placa,
nro_renavam,
ano,
modelo,
chassi,
marca,
cor,
descricao
) 
values 
(
'$placa',
'$nro_renavam',
'$ano',
'$modelo',
'$chassi',
'$marca',
'$cor',
'$descricao'
)";
$stmt = $PDO->prepare ($sql);
$stmt->bindParam( 'placa', $placa);
$stmt->bindParam( 'nro_renavam', $nro_renavam);
$stmt->bindParam( 'ano', $ano);
$stmt->bindParam( 'modelo', $modelo);
$stmt->bindParam( 'chassi', $chassi);
$stmt->bindParam( 'marca', $marca); 
$stmt->bindParam( 'cor', $cor);
$stmt->bindParam( 'descricao', $descricao);
$result = $stmt->execute();
 
if ( ! $result )
{
    ( $stmt->errorInfo() );
    exit;
} 
?>
<script language="JavaScript"> 
window.location="listar_veiculos.php"; 
</script> 
<?php include_once '../inc/footer.php'; ?>
