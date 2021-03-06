<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
<script language="javascript" src="../js/jquery-3.2.1.min.js.js"></script>
<script language="javascript" src="../js/jquery.mask.min.js"></script>

<h2>Editar Veiculos</h2>
<hr/>
<?php
/*Linha 9 a 11 pega o ID que veio via GET e faz um SELECT para trazer no formulario apenas os dados  */
$veiculo_id = $_GET['veiculo_id'];
$rows = $PDO->query("SELECT * FROM trans.veiculo where veiculo_id = '$veiculo_id'");
$row = $rows->fetch (PDO::FETCH_ASSOC);
?>
<!--Linha 14 envia dos dados alterados do formulario de edição para o arquivo edit.php via POST  -->
<form action="edit.php" method="post">
<!--Linha 16 não sei pra que serve, mais se excluir essa merda não funciona o editar  -->
<input type="hidden" class="form-control" name="veiculo_id" value="<?php echo $row['veiculo_id']?>" >

<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Placa</label>
        <input type="text" class="form-control" name="placa" id="placa" style="text-transform:uppercase"  value="<?php echo $row['placa']?>" >
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $('#placa').mask('AAA-0000');
    })
    </script>
<div class="row">    
<div class="form-group col-md-2">
	<label for="campo2">Numero do Renavam</label>
	<input type="text" class="form-control" name="nro_renavam" id="nro_renavam" value="<?php echo $row['nro_renavam']?>">
</div>
    <script type="text/javascript">
    $(document).ready(function(){
    $('#nro_renavam').mask('00000000000');
    })
    </script>
<div class="form-group col-md-2">
	<label for="campo3">Ano de Fabricação</label>
	<input type="text" class="form-control" name="ano" id="ano" value="<?php echo $row['ano']?>">
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $('#ano').mask('0000/0000');
    })
    </script>
<div class="form-group col-md-6">
	<label for="campo4">Modelo</label>
	<input type="text" class="form-control" name="modelo" id="modelo" style="text-transform:uppercase"  value="<?php echo $row['modelo']?>">
</div>

<div class="form-group col-md-2">
	<label for="campo5">Chassi</label>
	<input type="text" class="form-control" name="chassi" id="chassi" style="text-transform:uppercase"  value="<?php echo $row['chassi']?>" >
</div>
</div>    

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo6">Marca</label>
	<input type="text" class="form-control" name="marca" id="marca" style="text-transform:uppercase"  value="<?php echo $row['marca']?>" >
</div>

<div class="form-group col-md-2">
	<label for="campo7">Cor</label>
	<input type="text" class="form-control" name="cor" id="cor" style="text-transform:uppercase"  value="<?php echo $row['cor']?>" >
</div>


<div class="form-group col-md-8">
	<label for="campo5">Descrição do Veiculo</label>
	<input type="text" class="form-control" name="descricao" id="descricao" style="text-transform:uppercase"  value="<?php echo $row['descricao']?>">
</div>
</div>

<center>
<div id="actions" class="row">
	<div class="col-md-12">
	
		
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="listar_veiculos.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</center>
</form>

<?php include_once '../inc/footer.php'; ?>
