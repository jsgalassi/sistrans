<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<?php
$veiculo_id = $_POST['veiculo_id'];
$data_entrada = $_POST['data_entrada'];
	$dte = explode('/', $data_entrada);
	$dteb = $dte[2].'-'.$dte[1].'-'.$dte[0];
$data_fechamento = $_POST['data_fechamento'];
	$dtf = explode('/', $data_fechamento);
	$dtfb = $dtf[2].'-'.$dtf[1].'-'.$dtf[0];
$nro_entrada = $_POST['nro_entrada'];
$kminicial = $_POST['kminicial'];
$kmfinal = $_POST['kmfinal'];
$percorrido = $_POST['percorrido'];
	$resultado = ($kmfinal - $kminicial);
$cidade_id = $_POST['cidade_id'];
$vlr_frete = $_POST['vlr_frete'];
$nf = $_POST['nf'];

$sql = "insert into trans.frete
(
veiculo_id,
data_entrada,
data_fechamento,
nro_entrada,
kminicial,
kmfinal,
percorrido,
cidade_id,

nf
) 
values
(
'$veiculo_id',
'$dteb',
'$dtfb',
'$nro_entrada',
'$kminicial',
'$kmfinal',
'$resultado',
'$cidade_id',

'$nf'
)";
$stmt = $PDO->prepare ($sql);
$stmt->bindValue('veiculo_id', $veiculo_id);
$stmt->bindValue('data_entrada', $dteb);
$stmt->bindValue('data_fechamento', $dtfb);
$stmt->bindValue('nro_entrada', $nro_entrada); 
$stmt->bindValue('kminicial', $kminicial);
$stmt->bindValue('kmfinal', $kmfinal);
$stmt->bindValue('percorrido', $resultado);
$stmt->bindValue('cidade_id', $cidade_id);

$stmt->bindValue('nf', $nf);
$result = $stmt->execute();
 
if ( ! $result )
{
    ( $stmt->errorInfo() );
    exit;
}
?>
<script language="JavaScript"> 
window.location="statusfrete.php"; 
</script> 
<?php include_once '../inc/footer.php'; ?>
