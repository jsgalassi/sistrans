<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<?php
$veiculo_id = strtoupper($_POST['veiculo_id']);
$nome = strtoupper($_POST['nome']);
$cpf = ($_POST['cpf']);
$rg = ($_POST['rg']);
$nro_cnh = ($_POST['nro_cnh']);
$tipo_cnh = strtoupper($_POST['tipo_cnh']);
$logradouro = strtoupper($_POST['logradouro']);
$nro = ($_POST['nro']);
$complemento = strtoupper($_POST['complemento']);
$bairro = strtoupper($_POST['bairro']);
$cep = ($_POST['cep']);
$cidade_id = ($_POST['cidade_id']);
$obs = strtoupper($_POST['obs']);

$sql = "INSERT INTO trans.motorista
(
veiculo_id, 
nome,
cpf, 
rg,
nro_cnh, 
tipo_cnh, 
logradouro, 
nro, 
complemento, 
bairro, 
cep, 
cidade_id,
obs
)
VALUES 
(
'$veiculo_id', 
'$nome',
'$cpf', 
'$rg',
'$nro_cnh', 
'$tipo_cnh', 
'$logradouro', 
'$nro', 
'$complemento', 
'$bairro', 
'$cep', 
'$cidade_id',
'$obs'
)";
$stmt = $PDO->prepare ($sql);
$stmt->bindParam( 'veiculo_id', $veiculo_id);
$stmt->bindParam( 'nome', $nome);
$stmt->bindParam( 'cpf', $cpf);
$stmt->bindParam( 'rg', $rg);
$stmt->bindParam( 'nro_cnh', $nro_cnh);
$stmt->bindParam( 'tipo_cnh', $tipo_cnh); 
$stmt->bindParam( 'logradouro', $logradouro);
$stmt->bindParam( 'nro', $nro);
$stmt->bindParam( 'complemento', $comlemento);
$stmt->bindParam( 'bairro', $bairro);
$stmt->bindParam( 'cep', $cep);
$stmt->bindParam( 'cidade_id', $cidade_id);
$stmt->bindParam( 'obs', $obs);
$result = $stmt->execute();

if ( ! $result )
{
    ( $stmt->errorInfo() );
    exit;
}
?>
<script language="JavaScript"> 
window.location="listar_motoristas.php"; 
</script> 
<?php include_once '../inc/footer.php'; ?>
