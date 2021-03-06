<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
<script language="javascript" src="../js/jquery-3.2.1.min.js.js"></script>
<script language="javascript" src="../js/jquery.mask.min.js"></script>

<h2>Cadastro de Motoristas</h2>

<form action="insert.php" method="post" >
<hr/>

<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Veiculo</label>
	<select name="veiculo_id" name="veiculo_id" class="form-control">
    	<option>Selecione o Veiculo</option>
		<?php
		$rows = $PDO->query("SELECT placa, veiculo_id FROM trans.veiculo");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['veiculo_id']."> ".$row['placa']."</option>";
		}
		?>
	</select>
</div>

<div class="form-group col-md-10">
	<label for="campo2">Nome do Motorista</label>
	<input type="text" class="form-control" name="nome" id="nome" style="text-transform:uppercase" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo3">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf" required>
</div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true});
    })
        </script>
<div class="form-group col-md-2">
	<label for="campo4">RG</label>
	<input type="text" class="form-control" name="rg" id="rg" required>
</div>

<div class="form-group col-md-2">
	<label for="campo5">Nro da CNH</label>
	<input type="text" class="form-control" name="nro_cnh" id="nro_cnh" required>
</div>
	<script type="text/javascript">
    $(document).ready(function(){
        $('#nro_cnh').mask('00000000000', {reverse: true});
    })
        </script>
<div class="form-group col-md-1">
	<label for="campo6">Categoria</label>
	<input type="text" class="form-control" name="tipo_cnh" id="tipo_cnh" style="text-transform:uppercase" required>
</div>
    <script type="text/javascript">
    $(document).ready(function(){
    $('#tipo_cnh').mask('A-A');
    })
    </script> 
<div class="form-group col-md-5">
	<label for="campo7">Logradouro</label>
	<input type="text" class="form-control" name="logradouro" id="logradouro" style="text-transform:uppercase" required>
</div>
</div>

<div class="row">    
<div class="form-group col-md-1">
	<label for="campo13">Nº</label>
	<input type="text" class="form-control" name="nro" id="nro" style="text-transform:uppercase" required>
</div>

<div class="form-group col-md-4">
	<label for="campo8">Complemento</label>
	<input type="text" class="form-control" name="complemento" id="complemento" style="text-transform:uppercase">
</div>
 
<div class="form-group col-md-7">
	<label for="campo9">Bairro</label>
	<input type="text" class="form-control" name="bairro" id="bairro" style="text-transform:uppercase" required>
</div></div>

<div class="row">    
<div class="form-group col-md-2">
	<label for="campo10">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep" style="text-transform:uppercase" required>
</div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#cep').mask('00.000-000');  
    })
    </script>
<div class="form-group col-md-10">
	<label for="campo2">Cidade/UF</label>
	<select name="cidade_id" name="cidade_id" class="form-control">
		<?php
		$rows = $PDO->query("SELECT cidade, uf, cidade_id FROM trans.uf_cidade");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['cidade_id']."> ".$row['cidade']." - ".$row['uf']."</option>";
			
		}
		?>
	</select>
</div></div>

<div class="row">    
<div class="form-group col-md-12">
	<label for="campo12">Obs</label>
	<input type="text" class="form-control" name="obs" style="text-transform:uppercase">
</div>
</div>

<center>
<div id="actions" class="row">
	<div class="col-md-12">
		<button type="submit" class="btn btn-primary">Salvar</button>
                <a href="listar_motoristas.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</center>
</form>

<?php include_once '../inc/footer.php'; ?>