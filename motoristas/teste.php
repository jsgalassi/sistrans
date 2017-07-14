
<?php include_once '../conex/conexao.php';?>

<?php

$motoristas = $PDO->query("SELECT * FROM trans.motorista m inner join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = 2");
$motorista = $motoristas->fetch (PDO::FETCH_ASSOC);
?>
<br>
<div class="form-group col-md-2">
	<label for="campo1">Veiculo</label>
	<select name="veiculo_id" name="veiculo_id" class="form-control">
		<?php
		$rows = $PDO->query("SELECT * FROM trans.motorista m inner join trans.veiculo v on (m.veiculo_id = v.veiculo_id) where motorista_id = 2");
		while ($row = $rows->fetch (PDO::FETCH_ASSOC))
		{
			echo "<option value= ".$row['veiculo_id']."> ".$row['placa']."</option>";
		}
		?>
        
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
	<input type="text" class="form-control" name="nome" style="text-transform:uppercase" value="<?php echo $motorista['nome']?>" required>
</div>
</div>