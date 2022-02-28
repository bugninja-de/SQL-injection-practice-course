<?php
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysqli = new mysqli("mysql", "sqliuser", "password", "sqlidb");
	$mysqli->query("SET NAMES 'utf8'");
	if(!$mysqli)
	{
	  exit("Connection error: ".mysqli_connect_error());
	}
?>
