<?php
session_start();
header('Content-Type: text/html; charset=iso-8859-1');
include 'Datos/conexion.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>sin título</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/Estilos.css">
	<meta name="generator" content="Geany 1.22" />

	<style type="text/css">	

.turquesa2 {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #59b3a7), color-stop(1, #409987));
	background:-moz-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:-webkit-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:-o-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:-ms-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:linear-gradient(to bottom, #59b3a7 5%, #409987 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#59b3a7', endColorstr='#409987',GradientType=0);
	background-color:#59b3a7;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:14px;
	font-weight:bold;
	width:100px;
	height:25px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.turquesa2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #409987), color-stop(1, #59b3a7));
	background:-moz-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:-webkit-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:-o-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:-ms-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:linear-gradient(to bottom, #409987 5%, #59b3a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#409987', endColorstr='#59b3a7',GradientType=0);
	background-color:#409987;
}
.turquesa2:active {
	position:relative;
	top:1px;
}

.turquesa {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #59b3a7), color-stop(1, #409987));
	background:-moz-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:-webkit-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:-o-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:-ms-linear-gradient(top, #59b3a7 5%, #409987 100%);
	background:linear-gradient(to bottom, #59b3a7 5%, #409987 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#59b3a7', endColorstr='#409987',GradientType=0);
	background-color:#59b3a7;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:14px;
	font-weight:bold;
	width:100px;
	height:30px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.turquesa:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #409987), color-stop(1, #59b3a7));
	background:-moz-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:-webkit-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:-o-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:-ms-linear-gradient(top, #409987 5%, #59b3a7 100%);
	background:linear-gradient(to bottom, #409987 5%, #59b3a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#409987', endColorstr='#59b3a7',GradientType=0);
	background-color:#409987;
}
.turquesa:active {
	position:relative;
	top:1px;
}


/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 25px;
  cursor: pointer;
}

/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  content: '';
  position: absolute;
  left:0; top: 2px;
  width: 17px; height: 17px;
  border: 1px solid #aaa;
  background: #f8f8f8;
  border-radius: 3px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '✔';
  position: absolute;
  top: 3px; left: 4px;
  font-size: 18px;
  line-height: 0.8;
  color: #09ad7e;
  transition: all .2s;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #bbb;
  background-color: #ddd;
}
[type="checkbox"]:disabled:checked + label:after {
  color: #999;
}
[type="checkbox"]:disabled + label {
  color: #aaa;
}
/* accessibility */
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before {
  border: 1px dotted blue;
}

/* hover style just for information */
label:hover:before {
  border: 1px solid #4778d9!important;
}



	</style>
	
</head>
<body background="fond2.png">

<table border="0" align="left">	
		<tr>
			<td colspan="5" align="LEFT">
				<img src="log4.png" alt="Smiley face" height="50" width="80">
			</td>
			
		</tr>
</table>

</br></br></br></br>



<form action="crearcarpeta.php" method="post" enctype="multipart/form-data">
		<table border="0" align="center">
		
		
		<tr>
			<td colspan="5" align="CENTER">
				<FONT size="5" FACE="small fonts" color="#3B170B">Crear Carpetas</FONT>
			</td>
		</tr>
	
			<?php
				
				/*echo "<tr><td><FONT size='3' FACE='small fonts' color='#3B170B'>&nbsp</FONT></td></tr>";
				echo "<tr><td><FONT size='3' FACE='small fonts' color='#3B170B'>&nbsp</FONT></td></tr>";
				echo "<tr><td><FONT size='3' FACE='small fonts' color='#3B170B'>&nbsp</FONT></td></tr>";
				*/
				
				echo "<tr>";
				echo "<td><FONT size='3' FACE='small fonts' color='#3B170B'>La carpeta se creara en la ruta:</strong></td>";
				echo "</tr>";
				
				echo "<tr>";
				echo "<td><FONT size='3.5' FACE='small fonts' color='#3B170B'><strong>".$_SESSION['ruta']."</strong></FONT></td>";
				echo "</tr>";
			
				
			?>
			<TR>
				
				<td colspan="5" align="center"><label>Nombre:</label>
				<label><input type="text" name="Nombre" value="" /></label>
				</td>
			</TR>
			
			
			<tr>
				<td><FONT size="1" FACE="small fonts" color="#3B170B"></FONT></td>
			</tr>
			<tr>
				
				<td><FONT size="3" FACE="small fonts" color="#3B170B"><strong></strong></FONT></td>
			</tr>
			
			<?php
			
			
			/////////////////
				$server="localhost";
				$username="root";
				$password="pirineos";
				$db='almacenararchivos';
				
				$con=mysqli_connect($server,$username,$password,$db);
				mysqli_set_charset($con,"utf8");
			///////////
			
			$departamentoUSER=$_SESSION['depart'];
			
			$nombreCarpeta=$_POST[Nombre];
		
			?>
		
			<tr>
				<td colspan="2"><input type="submit" onclick='alert("Se creo tu carpeta con exito.")' name="Crear" value="Crear" class="turquesa"/></td>
			</tr>
			

		

</form>

			<tr>
				<td><FONT size='3' FACE='small fonts' color='#3B170B'>&nbsp</FONT></td>
			</tr>
			<tr>
				<td><FONT size='3' FACE='small fonts' color='#3B170B'>&nbsp</FONT></td>
			</tr>
			
			<TR>
				<td colspan="5" align="CENTER">
					<FONT size="5" FACE="small fonts" color="#3B170B">Eliminar Carpetas</FONT>
				</td>
			</TR>
			
			
		<form action="crearcarpeta.php" method="post" enctype="multipart/form-data">
			<tr>
					<td align="center">
							<SELECT NAME="carpetaeliminar[]" > 
							<?php
								include 'Datos/conexion.php';
								$CarpetaMadre=$_SESSION['soloparaCCarpeta'];
								
								
								//////////PARTE PARA CARGAR TODAS LAS AREAS
								 if(empty($CarpetaMadre))
								 {
									$CarpetaMadre='Cero';
								 }
								 else
								 {
								
								 }
								/////PARA PODER VER SOLO LAS INDICADAS
												
								
								$consultaarchivos="SELECT * FROM carpetas where carpetaMadre='".$CarpetaMadre."' and departamento='".$_SESSION['depart']."'";
								$re=mysqli_query($con,$consultaarchivos);
								
								$contadornum=0;
								while ($depart=mysqli_fetch_array($re)) 
								{
									
										echo "<OPTION VALUE='".$depart['carpeta']."' >".$depart['carpeta']."</OPTION>";
								
								}		
							?>
							   
							</SELECT>
					</td><!--columna 3 -->
			
			</tr>
			<tr>
					<td colspan="2">
							<input type="submit" onclick='alert("Se borro la carpeta con exito.")' name="Borrar" value="Borrar" class="turquesa"/>
					</td>
			</tr>
			
		</form>
		
		
		</table>


<?php


if($_POST[Borrar] == "Borrar")
{
	$carpetaparaeliminar=$_POST[carpetaeliminar];

	
	$iddcarpeta="SELECT idcarpeta FROM carpetas where carpeta='".$carpetaparaeliminar[0]."'";
	$re=mysqli_query($con,$iddcarpeta);
								
	
	$idcarpeta=mysqli_fetch_array($re);
	
		$consultaarchivos1="DELETE from carpetas WHERE idcarpeta='".$idcarpeta[idcarpeta]."'";
		mysqli_query($con,$consultaarchivos1);
			
}



if($_POST[Crear] == "Crear")
{
					
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


			$ruta = "archivos/".$departament2[0]."/";
			//$ruta = "archivos/".$departament2[0]."/";
			opendir($ruta);

			function limpiarCaracteresEspeciales($string ){
			 $string = htmlentities($string);
			 $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
			 return $string;
			}

			$nombre=limpiarCaracteresEspeciales($_FILES['foto']['name']); //CADENA YA SIN ACENTOS

			$destino = $ruta.$nombre;
			//copy($_FILES['foto']['tmp_name'],$destino);
			
				
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
			$GestiondePersonal=$_POST[GestiondePersonal];
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
					$iddepartamentos=$iddepartament[0];

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
			/////
			if($Almacen=="on" or $departamento=="Almacen") 
				$Almacen="si";
			else 
				$Almacen="no";

			/////
			if($Basculas=="on" or $departamento=="Basculas")
				$basculas="si";
			else
				$Basculas="no";

			/////
			if($Calidad=="on" or $departamento=="Calidad")
				$Calidad="si";
			else
				$calidad="no";

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
				
			if($GestiondePersonal=="on" or $departamento=="GestiondePersonal")
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
				
				
				
				
			
			
			$con=mysqli_connect($server,$username,$password,$db);
			//mysql_select_db($db,$con)or die("no existe la base de datos");*/
			mysqli_set_charset($con,"utf8");
			
			
			//variable cargada con la carpeta abierta
			$query=mysqli_query($con,"Select * from carpetas where carpeta='".$_SESSION['carpetamadre']."'");
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
				
				if ( empty($_POST[Nombre]) ) 
				{
					echo 'Agrege un nombre';
				}
				else
				{
					$fecha=date("H:i   d-m-Y ");
					$consultaarchivo="INSERT INTO `archivos` (`nombrearchivo`, `nombrereal`, `fecha`, `departamento`, `idcarpeta`) VALUES ('$nombrearchivousuario', '$nombre', '$fecha', '$departamentofull', '$idcarpeta[0]')";
					mysqli_query($con,$consultaarchivo);
					echo $consultaarchivo;
					
					$query=mysqli_query($con,"Select * from archivos where nombrearchivo='".$nombrearchivousuario."' and nombrereal='".$nombre."' and fecha='".$fecha."'");
					mysqli_data_seek($query,0);
					$idarchivo = mysqli_fetch_row($query);
					
					mysqli_query($con,"insert into permisos(Almacen,Basculas,Calidad,Cedi,Compras,Contabilidad,Credito,DireccionAdm,DireccionGral,Embarques,Envasado,SanidadyTrig,Gestion,Investigacion,labFuncionales,labHarinas,labMicrobiologia,Legal,Mantenimiento,Mezclas,Molino,Panaderia,Planeacion,Recepcion,Ribera,SeguridadInd,Sistemas,Tesoreria,Ventas,idarchivo) values('$Almacen','$Basculas','$Calidad','$Cedi','$Compras','$Contabilidad','$Credito','$DireccionAdministrativa','$DireccionGeneral','$Embarques','$Envasado','$SanidadyTrigos','$GestiondePersonal','$Investigacion','$LabFuncionales','$LabHarinas','$LabMicrobiologia','$Legal','$Mantenimiento','$Mezclas','$Molino','$Panaderia','$Planeacion','$Recepcion','$Ribera','$SeguridadIndustrial','$Sistemas','$Tesoreria','$Ventas','$idarchivo[0]')");
				}
			
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
					
					//obtener todos los departamentos
					/*$consultaarchivos="SELECT * FROM departamentos where departamento='".$_SESSION['depart']."'";
					$re=mysqli_query($con,$consultaarchivos);
					$depart=mysqli_fetch_array($re);
					
					$iddepartament[$j]=$depart['iddepartamento'];		
		
					$iddepartamentos=$iddepartament[0];*/

						if ( empty($_POST[Nombre]) ) 
						{
							echo 'Agrege un nombre';
						}
						else
						{
							$fecha=date("H:i   d-m-Y ");
							$departamentoc=$_SESSION['depart'];
							$consultainsertar="insert into carpetas(carpeta,carpetaMadre,departamento,iddepartamento) values('$nombreCarpeta','$carpetaMadre','$departamentoc','$iddepartamentos')";
							mysqli_query($con,$consultainsertar);
						}
				
				}
	
}
	///////////////////////////
	
	//header("location:../"); 
?>




</body>
</html>