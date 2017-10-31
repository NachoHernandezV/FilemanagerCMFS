<?php
session_start();
?>
<?php
header('Content-Type: text/html; charset=iso-8859-1');
include '../Datos/conexion.php';



			
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
//$ruta = "archivos/".$departament2[0]."/";
opendir($ruta);

function limpiarCaracteresEspeciales($string ){
 $string = htmlentities($string);
 $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
 return $string;
}

///este if y else es para evitar que se inserte registro en archivos 
//cuando no se eleigio ningun archivo osea sin archivo
if ( empty($_FILES['foto']['name']) or empty($_POST[Nombre]) ) 
{
    echo 'Agrege un archivo';
}
else
{

	$nombre=limpiarCaracteresEspeciales($_FILES['foto']['name']); //CADENA YA SIN ACENTOS

	$destino = $ruta.$nombre;
	copy($_FILES['foto']['tmp_name'],$destino);


	//SOLUCION PROBLEMA DE ACENTOS AL GUARDAR LOS NOMBRES




	$nombrearchivousuario2=$_POST[Nombre];
	$nombrearchivousuario=utf8_encode($nombrearchivousuario2);


	//para php version nueva zona horaria
	date_default_timezone_set('America/Monterrey');

	//RECIBIR DATOS
	$Almacen=$_POST[Almacen];
	$Basculas=$_POST[Basculas];
	$Calidad=$_POST[Calidad];
	$Cedi=$_POST[Cedi];
	$Compras=$_POST[Compras];
	$Contabilidad=$_POST[Contabilidad];
	$Credito=$_POST[Credito];
	$DireccionAdministrativa=$_POST[DireccionAdministrativa];
	$DireccionGeneral=$_POST[DireccionGeneral];
	$Embarques=$_POST[Embarques];
	$Envasado=$_POST[Envasado];
	$SanidadyTrigos=$_POST[SanidadyTrigos];
	$GestiondePersonal=$_POST[Gestiondepersonal];
	$Investigacion=$_POST[Investigacion];
	$LabFuncionales=$_POST[LabFuncionales];
	$LabHarinas=$_POST[LabHarinas];
	$LabMicrobiologia=$_POST[LabMicrobiologia];
	$Legal=$_POST[Legal];
	$Mantenimiento=$_POST[Mantenimiento];
	$Mezclas=$_POST[Mezclas];
	$Molino=$_POST[Molino];
	$Panaderia=$_POST[Panaderia];
	$Planeacion=$_POST[Planeacion];
	$Recepcion=$_POST[Compras];
	$Ribera=$_POST[Ribera];
	$SeguridadIndustrial=$_POST[SeguridadIndustrial];
	$Sistemas=$_POST[Sistemas];
	$Tesoreria=$_POST[Tesoreria];
	$Ventas=$_POST[Ventas];
	$DirecciondeVentas=$_POST[DirecciondeVentas];
	$DirecciondeCalidad=$_POST[DirecciondeCalidad];
	$DirecciondeProduccion=$_POST[DirecciondeProduccion];
	$GerenciaInvestigacion=$_POST[GerenciaInvestigacion];
	$GerenciaCedi=$_POST[GerenciaCedi];
	$GerenciaMezclado=$_POST[GerenciaMezclado];
	$GerenciaPlaneacion=$_POST[GerenciaPlaneacion];




			
				//obtener todos los departamentos
				$consultaarchivos="SELECT * FROM departamentos where departamento='".$_SESSION['depart']."'";
				$re=mysqli_query($con,$consultaarchivos);
				$j=0;
				while ($depart=mysqli_fetch_array($re)) 
				{
					$iddepartament[$j]=$depart['iddepartamento'];			
					$departament[$j]=$depart['departamento'];
					$departament2[$j]=$depart['departamentoJunto'];
					$j=$j+1;;
									
				}	
				///////

	//OBTENER LA EXTENCION DE ARCHIVO
	$iniciopunto='0';
	for($i=0;$i<=strlen($nombre);$i++)
	{
		if($nombre[$i]==".")
			$iniciopunto=$i;
	}
	$extarchivo=substr($nombre,$iniciopunto,5);  // bcd
	///////////////////


	$departamentofull=$departament[0];
	$departamento=$departament2[0];
	$iddepartamentos=$iddepartament[0];
	/////
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
	if($Cedi=="on" or $departamento=="Calidad")
		$Cedi="si";
	else
		$Cedi="no";

		////////
	if($Compras=="on" or $departamento=="Compras")
		$Compras="si";
	else
		$Compras="no";

		////////
	if($Contabilidad=="on" or $departamento=="Contabilidad")
		$Contabilidad="si";
	else
		$Contabilidad="no";

		////////
	if($Credito=="on" or $departamento=="Credito")
		$Credito="si";
	else
		$Credito="no";
		
		////
	if($DireccionAdministrativa=="on" or $departamento=="DireccionAdministrativa")
		$DireccionAdministrativa="si";
	else
		$DireccionAdministrativa="no";
		

		////
	if($DireccionGeneral=="on" or $departamento=="DireccionGeneral")
		$DireccionGeneral="si";
	else
		$DireccionGeneral="no";	
		
		
			////
	if($Embarques=="on" or $departamento=="Embarques")
		$Embarques="si";
	else
		$Embarques="no";	
		
		
					////
	if($Envasado=="on" or $departamento=="Envasado")
		$Envasado="si";
	else
		$Envasado="no";	
		
	if($SanidadyTrigos=="on" or $departamento=="SanidadyTrigos")
		$SanidadyTrigos="si";
	else
		$SanidadyTrigos="no";	
		
	if($GestiondePersonal=="on" or $departamento=="Gestiondepersonal")
		$GestiondePersonal="si";
	else
		$GestiondePersonal="no";	
		
	if($Investigacion=="on" or $departamento=="Investigacion")
		$Investigacion="si";
	else
		$Investigacion="no";	
			
	if($LabFuncionales=="on" or $departamento=="LabFuncionales")
		$LabFuncionales="si";
	else
		$LabFuncionales="no";	
		
	if($LabHarinas=="on" or $departamento=="LabHarinas")
		$LabHarinas="si";
	else
		$LabHarinas="no";		
		
			
	if($LabMicrobiologia=="on" or $departamento=="LabMicrobiologia")
		$LabMicrobiologia="si";
	else
		$LabMicrobiologia="no";
		
	if($Legal=="on" or $departamento=="Legal")
		$Legal="si";
	else
		$Legal="no";
		
	if($Mantenimiento=="on" or $departamento=="Mantenimiento")
		$Mantenimiento="si";
	else
		$Mantenimiento="no";
		
			
	if($Mezclas=="on" or $departamento=="Mezclas")
		$Mezclas="si";
	else
		$Mezclas="no";
		

	if($Molino=="on" or $departamento=="Molino")
		$Molino="si";
	else
		$Molino="no";
		

	if($Panaderia=="on" or $departamento=="Panaderia")
		$Panaderia="si";
	else
		$Panaderia="no";	
		
		if($Planeacion=="on" or $departamento=="Planeacion")
		$Planeacion="si";
	else
		$Planeacion="no";	

		if($Recepcion=="on" or $departamento=="Recepcion")
		$Recepcion="si";
	else
		$Recepcion="no";	

		if($Ribera=="on" or $departamento=="Ribera")
		$Ribera="si";
	else
		$Ribera="no";

		if($SeguridadIndustrial=="on" or $departamento=="SeguridadIndustrial")
		$SeguridadIndustrial="si";
	else
		$SeguridadIndustrial="no";
		
		
		if($Sistemas=="on" or $departamento=="Sistemas")
		$Sistemas="si";
	else
		$Sistemas="no";
		
		
	if($Tesoreria=="on" or $departamento=="Tesoreria")
		$Tesoreria="si";
	else
		$Tesoreria="no";
		
	if($Ventas=="on" or $departamento=="Ventas")
		$Ventas="si";
	else
		$Ventas="no";
	
		
	if($DirecciondeVentas=="on" or $departamento=="DirecciondeVentas")
		$DirecciondeVentas="si";
	else
		$DirecciondeVentas="no";
	
	if($DirecciondeCalidad=="on" or $departamento=="DirecciondeCalidad")
		$DirecciondeCalidad="si";
	else
		$DirecciondeCalidad="no";	
		
	if($DirecciondeProduccion=="on" or $departamento=="DirecciondeProduccion")
		$DirecciondeProduccion="si";
	else
		$DirecciondeProduccion="no";
		
	if($GerenciaInvestigacion=="on" or $departamento=="GerenciaInvestigacion")
		$GerenciaInvestigacion="si";
	else
		$GerenciaInvestigacion="no";
		
	if($GerenciaCedi=="on" or $departamento=="GerenciaCedi")
		$GerenciaCedi="si";
	else
		$GerenciaCedi="no";
	
		if($GerenciaMezclado=="on" or $departamento=="GerenciaMezclado")
		$GerenciaMezclado="si";
	else
		$GerenciaMezclado="no";
	
	if($GerenciaPlaneacion=="on" or $departamento=="GerenciaPlaneacion")
		$GerenciaPlaneacion="si";
	else
		$GerenciaPlaneacion="no";
	
		$con=mysqli_connect($server,$username,$password,$db);
		//mysql_select_db($db,$con)or die("no existe la base de datos");*/
		mysqli_set_charset($con,"utf8");
		
		
		//variable cargada con la carpeta abierta
		$query=mysqli_query($con,"Select * from carpetas where carpeta='".$_SESSION['carpetamadre']."' and departamento='".$_SESSION['depart']."'");
		mysqli_data_seek($query,0);
		$idcarpeta = mysqli_fetch_row($query);
		
		
		if($_POST[Subir]=="Subir")
		{
			$carpetaMadre=$_SESSION['carpetamadre'];
				
				if(empty($carpetaMadre))
				{
					 $idcarpeta=0;
				}
				else
				{
				
				}
				
			$fecha=date("H:i   d-m-Y ");
			$departamentoc=$_SESSION['depart'];
			$user=$_SESSION['usuarioname'];
			$consultaarchivo="INSERT INTO `archivos` (`nombrearchivo`, `nombrereal`, `fecha`, `departamento`, `idcarpeta`,`iddepartamento`,`creador`) VALUES ('$nombrearchivousuario', '$nombre', '$fecha', '$departamentoc', '$idcarpeta[0]','$iddepartamentos','$user')";
			mysqli_query($con,$consultaarchivo);
			echo $consultaarchivo;
			
			
			$query=mysqli_query($con,"Select * from archivos where nombrearchivo='".$nombrearchivousuario."' and nombrereal='".$nombre."' and fecha='".$fecha."'");
			mysqli_data_seek($query,0);
			$idarchivo = mysqli_fetch_row($query);
			
			
			
		
			mysqli_query($con,"insert into permisos(Almacen,Basculas,Calidad,Cedi,Compras,Contabilidad,Credito,DireccionAdministrativa,DireccionGeneral,Embarques,Envasado,SanidadyTrigos,Gestiondepersonal,Investigacion,LabFuncionales,LabHarinas,LabMicrobiologia,Legal,Mantenimiento,Mezclas,Molino,Panaderia,Planeacion,Recepcion,Ribera,SeguridadIndustrial,Sistemas,Tesoreria,Ventas,DirecciondeVentas,DirecciondeCalidad,DirecciondeProduccion,GerenciaInvestigacion,GerenciaCedi,GerenciaMezclado,GerenciaPlaneacion,idarchivo) values('$Almacen','$Basculas','$Calidad','$Cedi','$Compras','$Contabilidad','$Credito','$DireccionAdministrativa','$DireccionGeneral','$Embarques','$Envasado','$SanidadyTrigos','$GestiondePersonal','$Investigacion','$LabFuncionales','$LabHarinas','$LabMicrobiologia','$Legal','$Mantenimiento','$Mezclas','$Molino','$Panaderia','$Planeacion','$Recepcion','$Ribera','$SeguridadIndustrial','$Sistemas','$Tesoreria','$Ventas','$DirecciondeVentas','$DirecciondeCalidad','$DirecciondeProduccion','$GerenciaInvestigacion','$GerenciaCedi','$GerenciaMezclado','$GerenciaPlaneacion','$idarchivo[0]')");
		}
		
		
		//////////////////////////////crearcarpeta
			
			if($_POST[Crear]=="Crear")
			{
				$nombreCarpeta=$_POST[Nombre];
				$archivofinal;
				$carpetaMadre=$_SESSION['carpetamadre'];
				
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
				$departamentoc=$_SESSION['depart'];
				mysqli_query($con,"insert into carpetas(carpeta,carpetaMadre,departamento,iddepartamento) values('$nombreCarpeta','$carpetaMadre','$departamentoc','$iddepartamentos')");
			}
}		
	///////////////////////////
	
	header("location:../"); 
?>
