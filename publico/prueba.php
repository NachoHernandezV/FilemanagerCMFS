<meta charset="utf-8">
<?php
session_start();
?>
<?php 
	include "datos/conexion.php";
?>
<?php


	
			//obtener todos los departamentos
			$consultaarchivos="SELECT * FROM departamentos where departamento='".$_SESSION['depart']."'";
			$re=mysqli_query($con,$consultaarchivos);
			$j=0;
			while ($depart=mysqli_fetch_array($re)) 
			{
						
				$departament[$j]=$depart['departamento'];
				$departament2[$j]=$depart['departamentoJunto'];
				$j=$j+1;;
								
			}	
			///////


$ruta = "../archivos/".$departament2[0]."/";
echo $ruta;


//para php version nueva zona horaria
date_default_timezone_set('America/Monterrey');

//obtener todos los departamentos
		$consultaarchivos="SELECT * FROM departamentos";
		$re=mysqli_query($con,$consultaarchivos);
		$j=0;
		while ($depart=mysqli_fetch_array($re)) 
		{
						
			$departament[$j]=$depart['departamento'];
			$j=$j+1;;
								
		}	
///////

//RECIBIR DATOS
$Almacen=$_POST[Almacen];
$Basculas=$_POST[Basculas];
$Calidad=$_POST[Calidad];
$Cedi=$_POST[Cedi];
$Compras=$_POST[Compras];
$Contabilidad=$_POST[Contabilidad];
$Credito=$_POST[Credito];
$DireccionAdministrativa=$_POST[DireccionAdministrativa];
$DireccionGeneral=$_POST[Compras];
$Embarques=$_POST[Compras];
$Envasado=$_POST[Compras];
$SanidadyTrigos=$_POST[Compras];
$GestiondePersonal=$_POST[Compras];
$Investigacion=$_POST[Compras];
$LabFuncionales=$_POST[Compras];
$LabHarinas=$_POST[Compras];
$LabMicrobiologia=$_POST[Compras];
$Legal=$_POST[Compras];
$Mantenimiento=$_POST[Compras];
$Mezclas=$_POST[Compras];
$Molino=$_POST[Compras];
$Panaderia=$_POST[Compras];
$Planeacion=$_POST[Compras];
$Recepcion=$_POST[Compras];
$Ribera=$_POST[Compras];
$SeguridadIndustrial=$_POST[Compras];
$Sistemas=$_POST[Compras];
$Tesoreria=$_POST[Compras];
$Ventas=$_POST[Compras];

$departamento=$_SESSION['depart'];


$target_path = "C:/Users/SoporteHPI/Pictures/"; 
$target_path = $target_path . basename( $_FILES['foto']['name']); 
if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) 
{ 

} 
else
{ 
echo "Hubo un error al subir tu archivo! Por favor intenta de nuevo."; 
}




  //OBTENER LA EXTENCION DE ARCHIVO
$iniciopunto2='0';



$nombreprocesar=$_FILES['foto']['name'];
$nuevacadena;

function limpiarCaracteresEspeciales($string ){
 $string = htmlentities($string);
 $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
 return $string;
}

$cadena = "¿Cuántos años tíenes?";
echo "->>>>>".limpiarCaracteresEspeciales($nombreprocesar); // iCuantos anos tienes?




//OBTENER LA EXTENCION DE ARCHIVO
$iniciopunto='0';
for($i=0;$i<=strlen($nombre);$i++)
{
	if($nombre[$i]==".")
		$iniciopunto=$i;
}
$extarchivo=substr($nombre,$iniciopunto,5);  // bcd
///////////////////

echo "--".$Calidad."--".$Cedi;
echo $Basculas."--".$DireccionAdministrativa;



/////areaass
if($Almacen=="on" or $departamento=="Almacen") 
	$Almacen="si";
else 
	$Almacen="no";

/////
if($Basculas=="on" or $departamento=="Basculas")
	$Basculas="si";
else
	$Basculas="no";

/////
if($Calidad=="on" or $departamento=="Calidad")
	$Calidad="si";
else
	$Calidad="no";

////////
if($Cedi=="on" or $departamento=="Cedi")
	$Cedi="si";
else
	$cedi="no";

?>
