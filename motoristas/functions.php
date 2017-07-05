<?php
require_once('../config.php');
require_once(DBAPI);
$motoristas = null;
$motorista = null;
/**
 *  Listagem de Fretes
 */
function index() {
	global $motoristas;
	$motoristas = find_all('motoristas');
}