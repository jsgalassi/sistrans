<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php include_once '../conex/conexao.php';?>

<div class="row">
<div class="col-xs-6 col-sm-3 col-md-4">
<a href="form_motoristas.php" class="btn btn-primary btn-lg btn-block">
<div class="row">
<div class="col-xs-12 text-center">
<i class="fa fa-plus fa-4x"></i>
</div>
<div class="col-xs-12 text-center">
<p>Novo Motorista</p>
</div>
</div>
</a>
</div>

<div class="col-xs-6 col-sm-3 col-md-4">
<a href="listar_motoristas.php" class="btn btn-warning btn-lg btn-block">
<div class="row">
<div class="col-xs-12 text-center">
<i class="fa fa-pencil fa-4x"></i>
</div>
<div class="col-xs-12 text-center">
<p>Editar Motorista</p>
</div>
</div>
</a>
</div>

<div class="col-xs-6 col-sm-3 col-md-4">
<a href="read.php" class="btn btn-success btn-lg btn-block">
<div class="row">
<div class="col-xs-12 text-center">
<i class="fa fa-sticky-note fa-4x"></i>
</div>
<div class="col-xs-12 text-center">
<p>Relação de Motoristas</p>
</div>
</div>
</a>
</div>
      
</div>

<?php include_once '../inc/footer.php'; ?>
