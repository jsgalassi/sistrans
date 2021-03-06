<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<h2>Novo Frete</h2>

<form action="insert.php" method="post">
<hr/>
<div class="row">
<div class="form-group col-md-2">
	<label for="campo1">Placa do Veiculo</label>
	<select name="veiculo_id" name="veiculo_id" class="form-control">Selecione a Placa
		<?php
		$rows = $PDO->query("SELECT placa, veiculo_id FROM trans.veiculo");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
		echo 
			"<option value= 
				<li>$row[placa]</li>					
			</option>";
		}
		?>
	</select>
</div></div>

<div class="row">
<div class="form-group col-md-2">
	<label for="campo2">Cidade</label>
	<select name="cidade_id" name="cidade_id" class="form-control">Selecione a Cidade
		<?php
		$rows = $PDO->query("SELECT nome, uf FROM trans.uf_cidade");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
		echo 
			"<option value= 
				<li>$row[nome]</li>					
				<li>$row[uf]</li>					
			</option>";
		}
		?>
	</select>
</div></div>
   
<div class="row">   
<div class="form-group col-md-2">
	<label for="campo3">Data de Entrada</label>
	<input type="date" class="form-control" name="data_entrada">
</div>

<div class="form-group col-md-2">
	<label for="campo4">Data de Fechamento</label>
	<input type="date" class="form-control" name="data_fechamento">
</div>

<div class="form-group col-md-2">
	<label for="campo5">Nro de Entrada</label>
	<input type="text" class="form-control" name="nro_entrada">
</div>
 
<div class="form-group col-md-2">
	<label for="campo6">Km Inicial</label>
	<input type="text" class="form-control" name="km_inicial">
</div>
      
<div class="form-group col-md-2">
	<label for="campo7">Km Final</label>
	<input type="text" class="form-control" name="km_final">
</div>
           
<div class="form-group col-md-2">
	<label for="campo8">Total Percorrido</label>
	<input type="text" class="form-control" name="km_percorrido">
</div></div>

 <div class="row">            
<div class="form-group col-md-2">
	<label for="campo9">Valor Frete</label>
	<input type="text" class="form-control" name="vlr_frete">
</div>
       
<div class="form-group col-md-2">
	<label for="campo10">Nota Fiscal</label>
	<input type="text" class="form-control" name="nf">
</div>
</div>
<input type="hidden" class="form-control" name="status" value="<?php
if ($km_final == "")
{
 echo "Em Transito";
}
else
{
 echo "Finalizado";
}
?>">
<center>
<div id="actions" class="row">
	<div class="col-md-12">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="manfrete.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</center>
</form>


