<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php include_once '../inc/header.php'; ?>
<?php require_once '../conex/conexao.php';?>

<div class="row">
<div class="col-xs-6 col-sm-3 col-md-3">
    <a href="form_frete_abrir.php" class="btn btn-primary btn-lg btn-block">
<div class="row">
<div class="col-xs-12 text-center">
<i class="fa fa-plus fa-4x"></i>
</div>
<div class="col-xs-12 text-center">
<p>Novo frete</p>
</div>
</div>
</a>
</div>

<div class="col-xs-6 col-sm-3 col-md-3">
<a href="statusfrete.php" class="btn btn-warning btn-lg btn-block">
<div class="row">
<div class="col-xs-12 text-center">
<i class="fa fa-circle-o-notch fa-4x"></i>
</div>
<div class="col-xs-12 text-center">
<p>Status e fechamento</p>
</div>
</div>
</a>
</div>

<div class="col-xs-6 col-sm-3 col-md-3">
<a href="manfrete.php" class="btn btn-danger btn-lg btn-block">
<div class="row">
<div class="col-xs-12 text-center">
<i class="fa fa-pencil-square-o fa-4x"></i>
</div>
<div class="col-xs-12 text-center">
<p>Manutenção de fretes</p>
</div>
</div>
</a>
</div>

<div class="col-xs-6 col-sm-3 col-md-3">
<a href="relatorios.php" class="btn btn-success btn-lg btn-block">
<div class="row">
<div class="col-xs-12 text-center">
<i class="fa fa-sticky-note fa-4x"></i>
</div>
<div class="col-xs-12 text-center">
<p>Relatorios</p>
</div>
</div>
</a>
</div>
      
</div>

<?php include_once '../inc/footer.php'; ?>