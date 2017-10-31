<?php
session_start();
?>
<?php
header('Content-Type: text/html; charset=iso-8859-1');
include '../Datos/conexion.php';


	$nombreCarpeta=$_POST[Nombre];
	$carpetaMadre=$_SESSION['CarpMadre'];
	$archivofinal;
	
	if(empty($carpetaMadre))
	{
		$carpetaMadre='Cero';
	}
	else
	{
	
	}
	
	
	
	$con=mysqli_connect($server,$username,$password,$db);
	//mysql_select_db($db,$con)or die("no existe la base de datos");*/
	mysqli_set_charset($con,"utf8");
	
	
	$fecha=date("H:i   d-m-Y ");
	
	mysqli_query($con,"insert into carpetas(carpeta,carpetaMadre,idarchivo) values('$nombreCarpeta','$carpetaMadre','$fecha','$departamentofull')");
	
	
	$query=mysqli_query($con,"Select * from archivos where nombrearchivo='".$nombrearchivousuario."' and nombrereal='".$nombre."' and fecha='".$fecha."'");
	mysqli_data_seek($query,0);
    $idarchivo = mysqli_fetch_row($query);

	header("location:../"); 
?>
