<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
<?php include_once 'form_frete.php';?>

<?php
$veiculo_id = $_POST['veiculo_id'];
$cidade_id = $_POST['cidade_id'];
$data_entrada = $_POST['data_entrada'];
$data_fechamento = $_POST['data_fechamento'];
$nro_entrada = $_POST['nro_entrada'];
$km_inicial = $_POST['km_inicial'];
$km_final = $_POST['km_final'];
$km_percorrido = $_POST['km_percorrido'];
$vlr_frete = $_POST['vlr_frete'];
$nf = $_POST['nf'];
$status = $_POST['status'];

$sql = "insert into trans.frete
(
veiculo_id,
cidade_id,
data_entrada,
data_fechamento,
nro_entrada,
km_inicial,
km_final,
km_percorrido,
vlr_frete,
nf,
status
) 
values 
(
'$veiculo_id',
'$cidade_id',
'$data_entrada',
'$data_fechamento',
'$nro_entrada',
'$km_inicial',
'$km_final',
'$km_percorrido',
'$vlr_frete',
'$nf',
'$status'
)";
$stmt = $PDO->prepare ($sql);
$stmt->bindParam('veiculo_id', $veiculo_id);
$stmt->bindParam('cidade_id', $cidade_id);
$stmt->bindParam('data_entrada', $data_entrada);
$stmt->bindParam('data_fechamento', $data_fechamento);
$stmt->bindParam('nro_entrada', $nro_entrada); 
$stmt->bindParam('km_inicial', $km_inicial);
$stmt->bindParam('km_final', $km_final);
$stmt->bindParam('km_percorrido', $km_percorrido);
$stmt->bindParam('vlr_frete', $vlr_frete);
$stmt->bindParam('nf', $nf);
$stmt->bindParam('status', $status);
$result = $stmt->execute();
 
if ( ! $result )
{
    ( $stmt->errorInfo() );
    exit;
}
header("location: manfrete.php");
?>
<?php include_once '../inc/footer.php'; ?>


<!--INSERT INTO `trans`.`frete` (`veiculo_id`, `cidade_id`, `data_entrada`, `data_fechamento`, `nro_entrada`, `km_inicial`) VALUES ('24', '55', '', '', '123', '');-->
