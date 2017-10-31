<?php
	$server="localhost";
	$username="root";
	$password="pirineos";
	$db='almacenararchivos';
	
	$con=mysqli_connect($server,$username,$password,$db);
	
	mysqli_set_charset($con,"utf8");
	/*$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");*/
	
?>