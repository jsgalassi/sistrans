<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>
<script language="javascript" src="../js/jquery-3.2.1.min.js.js"></script>
<script language="javascript" src="../js/jquery.mask.min.js"></script>

<h2>Novo Frete</h2>

<form action="insert.php" method="post">
<hr/>

<div class="form-group col-md-2">
	<label for="campo4">Data de Fechamento</label>
        <input type="text" class="form-control" name="data_fechamento" id="data_fechamento">
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('#data_fechamento').mask('00/00/0000')
})
</script>
      
<div class="form-group col-md-2">
	<label for="campo7">Km Final</label>
	<input type="text" class="form-control" name="kmfinal" id="kmfinal">
</div>
           
<div class="form-group col-md-2">
	<label for="campo8">Total Percorrido</label>
	<input type="text" class="form-control" name="percorrido" id="percorrido">
    
</div></div>

 <div class="row">            
<div class="form-group col-md-2">
	<label for="campo9">Valor Frete</label>
	<input type="text" class="form-control" name="vlr_frete" id="vlr_frete">
</div>
       
<div class="form-group col-md-2">
	<label for="campo10">Nota Fiscal</label>
	<input type="text" class="form-control" name="nf" id="nf">
</div>
</div>

<center>
<div id="actions" class="row">
	<div class="col-md-12">
		<button type="submit" class="btn btn-primary">Abrir</button>
		<a href="manfrete.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</center>
</form>
<?php include_once '../inc/footer.php'; ?>