
<?php include_once '../conex/conexao.php';?>

<?php
/*Linha 9 a 11 pega o ID que veio via GET e faz um SELECT para trazer no formulario apenas os dados  */

$rows1 = $PDO->query("SELECT * FROM trans.motorista m join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = '6'");
$row1 = $rows1->fetch (PDO::FETCH_ASSOC);
?>
<br>
<form action="edit.php" method="post">
<input type="hidden" class="form-control" name="motorista_id" value="<?php echo $row1['6']?>" >

<div class="form-group col-md-2">
	<label for="campo1">Veiculo</label>
	<select name="veiculo_id" name="veiculo_id" class="form-control">
		<?php
		$rows2 = $PDO->query("SELECT * FROM trans.motorista m join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = '6'");
		while ($row2 = $rows2->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row2['veiculo_id']."> ".$row2['placa']."</option>";
		}
		?>
                <?php      
		$rows3 = $PDO->query("SELECT * FROM veiculo where veiculo_id <> '6'");
		while ($row3 = $rows3->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row3['veiculo_id']."> ".$row3['placa']."</option>";
		}
		?>
</select>
</div>

<div class="form-group col-md-10">
	<label for="campo2">Cidade/UF</label>
	<select name="cidade_id" name="cidade_id" class="form-control">
		<?php
		$rows4 = $PDO->query("SELECT c.uf, c.nome FROM uf_cidade c join motorista m on (m.cidade_id = c.cidade_id) where motorista_id = '6'");
		while ($row4 = $rows4->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row4['cidade_id']."> ".$row4['nome']."-".$row4['uf']."</option>";
		}
		?>
                <?php
		$rows5 = $PDO->query("SELECT * FROM uf_cidade where cidade_id <> '6'");
		while ($row5 = $rows5->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row5['cidade_id']."> ".$row5['nome']."-".$row5['uf']."</option>";
		}
		?>
	</select>
</div>
<div id="actions" class="row">
	<div class="col-md-12">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="listar_motoristas.php" class="btn btn-danger">Cancelar</a>
</div>
</div>

