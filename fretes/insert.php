<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<?php
$veiculo_id = $_POST['veiculo_id'];
$data_entrada = $_POST['data_entrada'];
$data_fechamento = $_POST['data_fechamento'];
$nro_entrada = $_POST['nro_entrada'];
$kminicial = $_POST['kminicial'];
$kmfinal = $_POST['kmfinal'];
$percorrido = $_POST['percorrido'];
$cidade_id = $_POST['cidade_id'];
$vlr_frete = $_POST['vlr_frete'];
$nf = $_POST['nf'];
$status = $_POST['status'];
$modificacao = $_POST['modificacao'];

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
vlr_frete,
nf,
status,
modificacao
) 
values
(
'$veiculo_id',
'$data_entrada',
'$data_fechamento',
'$nro_entrada',
'$kminicial',
'$kmfinal',
'$percorrido',
'$cidade_id',
'$vlr_frete',
'$nf',
'$status',
'$modificacao'
)";
$stmt = $PDO->prepare ($sql);
$stmt->bindParam('veiculo_id', $veiculo_id);
$stmt->bindParam('data_entrada', $data_entrada);
$stmt->bindParam('data_fechamento', $data_fechamento);
$stmt->bindParam('nro_entrada', $nro_entrada); 
$stmt->bindParam('kminicial', $kminicial);
$stmt->bindParam('kmfinal', $kmfinal);
$stmt->bindParam('percorrido', $percorrido);
$stmt->bindParam('cidade_id', $cidade_id);
$stmt->bindParam('vlr_frete', $vlr_frete);
$stmt->bindParam('nf', $nf);
$stmt->bindParam('status', $status);
$stmt->bindParam('modificacao', $modificacao);
$result = $stmt->execute();
 
if ( ! $result )
{
    ( $stmt->errorInfo() );
    exit;
}
header("location: manfrete.php");
?>
<?php include_once '../inc/footer.php'; ?>
