<?php
mysqli_report(MYSQLI_REPORT_STRICT);
function open_database() 
{
	try 
{
	$conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB_NAME);
	return $conn;
} 
catch (Exception $e) 
{
	echo $e->getMessage();
	return null;
}
}
function close_database($conn) 
{
	try 
{
	mysqli_close($conn);
} 
	catch (Exception $e) 
{
	echo $e->getMessage();
}
}


