
<?php require_once '../conex/conexao.php';?>
<?php
$fretes = null;
$frete = null;
/**
 *  Listagem de Fretes
 */
function index() 
{
	global $fretes;
	$fretes = find_all('fretes');
}
?>