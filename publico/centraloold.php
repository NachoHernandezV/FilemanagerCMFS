<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>File manager</title>
	<link rel="stylesheet" href="css/Estilos.css">
	<meta name="generator" content="Geany 1.22" />
	
	<style type="text/css">	
	
.cafe {
	-moz-box-shadow:inset 0px 1px 0px 0px #a6827e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a6827e;
	box-shadow:inset 0px 1px 0px 0px #a6827e;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d6a87c), color-stop(1, #9c7040));
	background:-moz-linear-gradient(top, #d6a87c 5%, #9c7040 100%);
	background:-webkit-linear-gradient(top, #d6a87c 5%, #9c7040 100%);
	background:-o-linear-gradient(top, #d6a87c 5%, #9c7040 100%);
	background:-ms-linear-gradient(top, #d6a87c 5%, #9c7040 100%);
	background:linear-gradient(to bottom, #d6a87c 5%, #9c7040 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d6a87c', endColorstr='#9c7040',GradientType=0);
	background-color:#d6a87c;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #54381e;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #4d3534;
}
.cafe:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #9c7040), color-stop(1, #d6a87c));
	background:-moz-linear-gradient(top, #9c7040 5%, #d6a87c 100%);
	background:-webkit-linear-gradient(top, #9c7040 5%, #d6a87c 100%);
	background:-o-linear-gradient(top, #9c7040 5%, #d6a87c 100%);
	background:-ms-linear-gradient(top, #9c7040 5%, #d6a87c 100%);
	background:linear-gradient(to bottom, #9c7040 5%, #d6a87c 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9c7040', endColorstr='#d6a87c',GradientType=0);
	background-color:#9c7040;
}
.cafe:active {
	position:relative;
	top:1px;
}
	.transparente {
		background-color:transparent;
		-moz-border-radius:4px;
		-webkit-border-radius:4px;
		border-radius:4px;
		border:0px solid #ffffff;
		display:inline-block;
		cursor:pointer;
		color:#ff1f32;
		font-family:Georgia;
		font-size:12px;
		padding:3px 13px;
		text-decoration:none;
		text-shadow:0px 1px 0px #b23e35;
	}
	.transparente:hover {
		background-color:transparent;
	}
	.transparente:active {
		position:relative;
		top:1px;
	}
	
	.text_encima {
		position: absolute;
		color: #7715D1;
		font-size: 13px;
		font-family: arial;
	}
	
	
.regresar {
	-moz-box-shadow:inset 0px 39px 0px -24px #e67a73;
	-webkit-box-shadow:inset 0px 39px 0px -24px #e67a73;
	box-shadow:inset 0px 39px 0px -24px #e67a73;
	background-color:#e4685d;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:5px 15px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.regresar:hover {
	background-color:#eb675e;
}
.regresar:active {
	position:relative;
	top:1px;
}


	</style>
</head>




<body background="fond3.png">
	
	
	
<table width="100%" border="0px" align="center">
	
	<?php
		
		include 'Datos/conexion.php';
		$departamentoBOTON="";
		$departamentoUSER=$_SESSION['depart'];
		$Areas=$_POST[Areas];
		$_SESSION['areas2']=$_POST[Areas];
		$Misarchivos=$_POST[MisArchivos];
		
			if( empty($_POST[Misarchivos])  )
			{
				$_SESSION['departjuntoonormal']="departamento";
			}
			
				if( !empty($_POST[Areas]) )
			{
					$_SESSION['departjuntoonormal']="departamentoJunto";
			}
		
			
		
		if($Misarchivos == "Mis Archivos")
		{
		echo "<h2 align='center'>";
		echo "<FONT size='5' FACE='small fonts' color='#3B170B'><strong>Mis Archivos de ".$_SESSION['depart']."</strong></FONT>";
		echo "</h2>";
		echo "<br/>";
		}
		else{
			echo "<h2 align='center'>";
		echo "<FONT size='5' FACE='small fonts' color='#3B170B'><strong>Archivos compartidos de ".$_SESSION['areas2']."</strong></FONT>";
		echo "</h2>";
		echo "<br/>";
		}
		
		
		
		$eliminar='Eliminar'.$_POST['number']; //el boton ELIMINAR ESTA COMPUESTO POR 2 PARTES
		if($_POST['Actualizar'] == 'Actualizar' OR $_POST[$eliminar] == 'Eliminar')
		{
			
		}
		else{
		//formar la RUTA DE SIGUIENTE pegar la ruTA
		$_SESSION['ruta'].='/'.$_POST['madrecarp'];
		$_SESSION['soloparaCCarpeta']=$_POST['madrecarp'];   //solo para mandar a crearcarpeta.php 
		}
		
		//////////PARTE PARA CARGAR TODAS LAS AREAS
			 if(empty($_POST[Areas]))
			 {
				 $AREASACTIVAR=0;
			 }
			 else
			 {
				 $_SESSION['Areas']=$_POST[Areas];
				 $AREASACTIVAR=1;
			 }
		/////PARA PODER VER SOLO LAS INDICADAS
	
	
		if($_POST[codigoarchivo] > 0 and $_POST[$eliminar] == 'Eliminar') //Para cuando se elimina se cargen otra vez los DATOS pero sin e eliminado
		{
			$Areas=$departamentoUSER;
			
			$consultaarchivos1="DELETE from permisos WHERE idarchivo='".$_POST[codigoarchivo]."'";
			mysqli_query($con,$consultaarchivos1);
			
			$consultaarchivos="DELETE from archivos WHERE idarchivo='".$_POST[codigoarchivo]."'";
			mysqli_query($con,$consultaarchivos);
			
		}
			
	
		
		if($_POST['retroceder'] == 1)
		{
			
				$longitudMAX=strlen($_SESSION['ruta']);
				
				
				$rutacompleta=$_SESSION['ruta'];
				$contador=0;
				
					
					$num=0;
				for($i=$longitudMAX;$i>=0;$i--)
				{
					if($contador == 1)
					{
						$rutase[$num]=$rutacompleta[$i];
					}
					if($rutacompleta[$i] == '/')
						{
							$contador=1;
						}
					$num=$num + 1;
				}
				
				///////////////////
				$num=0;
				$contador=0;
				//$longitudMAX2=strlen($rutase);
				for($i=0; $i<=$longitudMAX; $i++)
				{

					if($contador == 1)
					{
						$rutase2[$num]=$rutase[$i];
					}
					
						if($rutase[$i] == '/')
					{
						$contador=1;
					}
					
					
					$num=$num + 1;
				}
				///////////////////
				for($n=$longitudMAX;$n>=0;$n--)
				{
					$rutaprocesada.=$rutase2[$n];
				}
				//echo $rutaprocesada;	
				$_SESSION['ruta']=$rutaprocesada;
		}
		
		
	
						echo "<tr>";
						//ELABORACION DE BOTON REGRESAR
						if( empty($_POST['madrecarp']) )
						{
							
						}
						else
						{
							//parte 1
							/*if($Misarchivos=="Mis Archivos")
							{
								$departjuntoonormal="departamento";
							}
							else{
								$departjuntoonormal="departamentoJunto";
							}*/
							
							//nombre carpeta madre REGRESAR
							//$consultaarchivos3="SELECT c.carpetaMadre FROM carpetas c WHERE c.carpeta='".$_POST['madrecarp']."' and c.departamento='". $_SESSION['Areas']."'";
							
							//$consultaarchivos3="SELECT c.carpetaMadre FROM carpetas c, departamentos d WHERE d.iddepartamento=c.iddepartamento and c.carpeta='".$_POST['madrecarp']."' and d.".$departjuntoonormal."='". $_SESSION['Areas']."'";
							
							$consultaarchivos3="SELECT c.carpetaMadre FROM carpetas c, departamentos d WHERE d.iddepartamento=c.iddepartamento and c.carpeta='".$_POST['madrecarp']."' and d.".$_SESSION['departjuntoonormal']."='". $_SESSION['Areas']."'";
							
							
							$re3=mysqli_query($con,$consultaarchivos3);
							$carpetamadreANTERIOR=mysqli_fetch_array($re3);
							
							//ID CARPETA MADRE A REGRESAR
							$consultaarchivos4="SELECT c.idcarpeta FROM carpetas c WHERE c.carpeta='".$carpetamadreANTERIOR[0]."'";
							$re4=mysqli_query($con,$consultaarchivos4);
							$IDcarpetamadreANTERIOR=mysqli_fetch_array($re4);
							
							if($carpetamadreANTERIOR[0]=='Cero')
							{
								$raiz="Cero";
								//$_SESSION[carpetainiciocero]="Cero";
								$IDcarpetamadreANTERIOR[0]=0;
							}
		
								if($_POST['regresarraiz']!="Cero")
								{
									//para PODER ACTUALIZAR haI QUE MANDAR LA VARIABLE DE LA CARPETA MADRE
									//PARA LO CUAL USAMOS TEMPORAL
									$temporal=$_POST['madrecarp'];
									$tempidcarpeta=$_POST['codigoarchivocar'];
									echo "<form name='formulario4' method='post' action='central.php'>";
														echo "<td align='left' WIDTH='12'>";
														echo "<input  type='submit' name='Actualizar' class='cafe' Value='Actualizar' width='90' height='95' /></br>";		
														echo "</td>";
														echo "<td align='center' WIDTH='1'>";
														echo  "<input type='hidden' name='madrecarp' value='$temporal' />";
														echo "</td>";
														echo "<td align='center' WIDTH='1'>";
															echo  "<input type='hidden' name='codigoarchivocar' value='".$tempidcarpeta."' />";
														echo "</td>";
									echo "</form>";
									
									echo "<form name='formulario' method='post' action='central.php'>";
														echo "<td align='left' WIDTH='12'>";
														echo "<input  type='submit' name='Atras' class='cafe' Value='Atras' width='90' height='95' /></br>";		
														echo "</td>";
														echo "<td align='left' WIDTH='1000'>";
														echo "<label for='ruta'><strong>Ruta: $_SESSION[ruta]</strong></label>";
														echo "</td>";
														echo "<td align='center' WIDTH='5'>";
															echo  "<input type='hidden' name='codigoarchivocar' value='".$IDcarpetamadreANTERIOR[0]."' />";
														echo "</td>";
														echo "<td align='center' WIDTH='2'>";
															echo  "<input type='hidden' name='madrecarp' value='".$carpetamadreANTERIOR[0]."' />";
														echo "</td>";
														echo "<td align='center' WIDTH='2'>";
															echo  "<input type='hidden' name='regresarraiz' value='".$raiz."' />";
														echo "</td>";
														echo "<td align='center' WIDTH='2'>";
															echo  "<input type='hidden' name='retroceder' value='1' />";
														echo "</td>";
									echo "</form>";
								}
		
						}
						echo "</tr>";
					/////////////////////////////////
	
		echo "</table>";
		
		
		echo "<table border='0px' align='center'>";
		
		
		
		$consultaarchivos2="SELECT count(*)FROM carpetas a WHERE a.carpetaMadre='".$_POST['madrecarp']."'";
		
		if($Misarchivos=="Mis Archivos" or $_POST['regresarraiz']=="Cero" or $AREASACTIVAR==1)
		{	
			$consultaarchivos2="SELECT count(*) FROM carpetas a WHERE a.carpetaMadre='Cero'";
			$_SESSION['ruta']='';
		}
		
		$re2=mysqli_query($con,$consultaarchivos2);
		$f2=mysqli_fetch_array($re2);
		$columnas=3*$f2[0];
		
		echo "<tr>";
		echo "<td align='center' colspan='$columnas'>";
		echo "<FONT size='4' FACE='small fonts' color='#3B170B'><strong>Carpetas</strong></FONT>";
		echo "</td>";
		echo "</tr>";
	
	
	
		
	
			mysqli_set_charset($con,"utf8");

			//cargar la carpeta madre
			 $_SESSION['carpetamadre']=$_POST['madrecarp'];
			 
		
			
		if($Misarchivos=="Mis Archivos" or $_POST['regresarraiz']=="Cero" or $AREASACTIVAR==1 )
		{	
			/* parte 2
			if($Misarchivos=="Mis Archivos")
			{
				$_SESSION['Areas']=$departamentoUSER;
				$departjuntoonormal="departamento";
			}
			else{
				$departjuntoonormal="departamentoJunto";
			}*/
			
			//MEJORADA
			//$consultaarchivos="SELECT a.idcarpeta,a.carpeta,a.carpetaMadre FROM carpetas a, departamentos d WHERE a.iddepartamento=d.iddepartamento and a.carpetaMadre='Cero' and d.".$departjuntoonormal."='".$_SESSION['Areas']."'";

			$consultaarchivos="SELECT a.idcarpeta,a.carpeta,a.carpetaMadre FROM carpetas a, departamentos d WHERE a.iddepartamento=d.iddepartamento and a.carpetaMadre='Cero' and d.".$_SESSION['departjuntoonormal']."='".$_SESSION['Areas']."'";
			
			
			/*echo "</td>";
			echo "$consultaarchivos";
			echo "<td>";*/
				
			$re=mysqli_query($con,$consultaarchivos);
					
				$num='0';
				while ($f=mysqli_fetch_array($re)) 
				{		
						echo "<form name='formulario2' method='post' action='central.php'>";
							echo "<td align='center'>";
							echo "<input type=image border=0 ALIGN='BOTTOM' src='imagenes/carpeta.png'  name='$f[carpeta]' width='90' height='95'></br>";
							echo "<font size='3'>$f[carpeta]</font>";		
							echo "</td>";
							echo "<td align='center'>";
								echo  "<input type='hidden' name='codigoarchivocar' value='$f[idcarpeta]' />";
							echo "</td>";
							echo "<td align='center'>";
								echo  "<input type='hidden' name='madrecarp' value='$f[carpeta]' />";
							echo "</td>";
						echo "</form>";
				}
		}
		////////////////FIN BOTON MIS ARCHIVOS
		
		
		
		
		
		
		if($_POST['codigoarchivocar'] > 0 or $_POST['Actualizar']=='Actualizar') ///PARA TODAS LAS SUBCARPETAS Y ARCHIVOS INTERNOS
		{	
		/*
		parte 3
			if($Misarchivos=="Mis Archivos")
			{
				$departjuntoonormal="departamento";
			}
			else{
				$departjuntoonormal="departamentoJunto";
			}
			*/
			//CREAR SUBCARPETAS
				
				//$consultaarchivos="SELECT a.idcarpeta,a.carpeta,a.carpetaMadre FROM carpetas a, departamentos d WHERE a.iddepartamento=d.iddepartamento and a.carpetaMadre='".$_POST['madrecarp']."' and d.".$departjuntoonormal."='".$_SESSION['Areas']."'";
				
				$consultaarchivos="SELECT a.idcarpeta,a.carpeta,a.carpetaMadre FROM carpetas a, departamentos d WHERE a.iddepartamento=d.iddepartamento and a.carpetaMadre='".$_POST['madrecarp']."' and d.".$_SESSION['departjuntoonormal']."='".$_SESSION['Areas']."'";
				
				
				echo "<td>";
				echo $consultaarchivos;
				echo "</td";
		
				
				$re=mysqli_query($con,$consultaarchivos);
					
					while ($f=mysqli_fetch_array($re)) 
					{		
							echo "<form name='formulario' method='post' action='central.php'>";
								echo "<td align='center'>";
								echo "<input type=image src='imagenes/carpeta.png'  name='$f[carpeta]' width='90' height='95' /></br>";
								echo "<font size='3'>$f[carpeta]</font>";		
								echo "</td>";
								echo "<td align='center'>";
									echo  "<input type='hidden' name='codigoarchivocar' value='".$f['idcarpeta']."' />";
								echo "</td>";
								echo "<td align='center'>";
									echo  "<input type='hidden' name='madrecarp' value='$f[carpeta]' />";
								echo "</td>";
							echo "</form>";
					}
			//FIN DE LAS SUBCARPETAS
			
		
				
			
			
		}  ///FIN DE LAS SUBCARPETAS Y ARCHIVOS
	
	echo "</table>";
	
	


	echo "</br>";
	echo "</br>";

	////////////////////////////////////////////////////INICIO DE LA TABLA PARA ARCHIVOS
	if($Misarchivos=="Mis Archivos" or $_POST['regresarraiz']=="Cero" or $AREASACTIVAR==1)
	{
		
	}
	else
	{
		echo "<table border='0px' align='center'>";
		echo "<tr>";
			echo "<td align='center' colspan='12'>";
			echo "<FONT size='4' FACE='small fonts' color='#3B170B'><strong>Archivos</strong></FONT>";
			echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td align='center' colspan='2'>";
		echo "<FONT size='3' FACE='small fonts' color='#3B170B'>Nombre</FONT>";
		echo "</td>";

		
		echo "<td align='center' colspan='3'>";
		echo "<FONT size='3' FACE='small fonts' color='#3B170B'>Tipo</FONT>";
		echo "</td>";
	
		
		echo "<td align='center'>";
		echo "<FONT size='3' FACE='small fonts' color='#3B170B'>Edicion</FONT>";
		echo "</td>";

		
		echo "<td align='center' colspan='5'>";
		echo "<FONT size='3' FACE='small fonts' color='#3B170B'>Acciones</FONT>";
		echo "</td>";
	}

	echo "</tr>";
		
		if( $_POST['codigoarchivocar']>0 or $_POST['Actualizar']=='Actualizar')
		{
			/* PARTE 4
			if($Misarchivos=="Mis Archivos")
			{
				$departjuntoonormal="departamento";
			}
			else{
				$departjuntoonormal="departamentoJunto";
			}
			*/
			
				////////////PARA OBTENER EL DEPARTAMENTO JUNTO DEL USUARIO ACTUAL PARA VER SI HAY PERMISO
					//$consultaarchivos2="SELECT * FROM departamentos WHERE departamento='".$_SESSION['depart']."'";
					
					$consultaarchivos2="SELECT * FROM departamentos WHERE departamento='".$_SESSION['depart']."'";
					
					
					$re2=mysqli_query($con,$consultaarchivos2);
						
						while ($f2=mysqli_fetch_array($re2))
						{
							$nombrearchivoreal2=$f2['departamentoJunto'];
						}
				///////////////////////
					
				/////////////////   PARA OBTENER DEPARTAMENTO JUNTO PARA VER ARCHIVOS DE OTRAS AREAS
					$consultaarchivos4="SELECT * FROM departamentos WHERE departamento='".$_SESSION['Areas']."'";
					$re4=mysqli_query($con,$consultaarchivos4);
					
					while ($f4=mysqli_fetch_array($re4))
					{
						$departamentoforaneo=$f4['departamentoJunto'];
					}
				//////////////////
			
				
			
				//$consultaarchivos="SELECT a.idarchivo,a.nombrearchivo,a.nombrereal,a.fecha FROM permisos p, archivos a WHERE a.idarchivo=p.idarchivo and a.departamento='".$_SESSION['Areas']."' and p.".$_SESSION['depart']."='si' and a.idcarpeta='".$_POST[codigoarchivocar]."'";
				$consultaarchivos="SELECT a.idarchivo,a.nombrearchivo,a.nombrereal,a.fecha FROM permisos p, archivos a, departamentos d WHERE a.idarchivo=p.idarchivo and d.iddepartamento=a.iddepartamento and d.".$_SESSION['departjuntoonormal']."='".$_SESSION['Areas']."' and p.".$nombrearchivoreal2."='si' and a.idcarpeta='".$_POST[codigoarchivocar]."'";
				$re=mysqli_query($con,$consultaarchivos);
				

				
					$num='0';
					while ($f=mysqli_fetch_array($re)) 
					{
						$num=$num+1;
						$nombrearchivoreal=$f['nombrereal'];
						//OBTENER LA EXTENCION DE ARCHIVO
						$iniciopunto='0';
						for($i=0;$i<=strlen($nombrearchivoreal) ;$i++)
						{
							if($nombrearchivoreal[$i]==".")
							$iniciopunto=$i;
						}
						$extarchivo=substr($nombrearchivoreal,$iniciopunto,5);  // bcd
						
						$extarchivo2=substr($nombrearchivoreal,$iniciopunto+1,3);
						///////////////////
						
						
						echo "<tr>";
							
							echo "<td align='center' colspan='2'>";
							echo $f['nombrearchivo'];
							echo "</td>";
					
							
							
							echo "<td align='center' colspan='3'>".$extarchivo."</td>";
							
							echo "<td align='center'>";
							echo $f['fecha'];
							echo "</td>";
							
					
								
								if($extarchivo2 == "pdf" or $extarchivo2 == "jpg" or $extarchivo2 == "png" or $extarchivo2 == "bmp" or $extarchivo2 == "html" or $extarchivo2 == "htm")
								{
									//echo "<form name='formulariof' method='post' target='_blank' action='verpdf.php'>";
									echo "<form name='formulariof' method='post' target='_blank' action='verpdf.php'>";
									
									echo "<td align='center' colspan='2'>";
											echo "<input type='submit' name='Abrir".$num."' value='Abrir' class='transparente' />";
									//echo "</td>";
									//echo "<td align='center'>";
										echo  "<input type='hidden' name='nombre2' value='".$departamentoforaneo."' />";
									//echo "</td>";
									//echo "<td align='center'>";
										echo  "<input type='hidden' name='nombrereal' value='".$f['nombrereal']."' />";
									echo "</td>";
									
									echo "</form>";
								}
								else{
									echo "<td align='center' colspan='2'>";
									//echo "<A HREF=Imagenes/".$f['nombrereal'].">Abrir</A>";
									echo "<A HREF=\""."archivos/".$departamentoforaneo."/".$f['nombrereal']."\"/>Abrir</A>";
									echo "</td>";
									
							
								}
							
							if($departamentoUSER==$_SESSION['Areas'])
							{
										$temporal=$_POST['madrecarp'];
										$tempidcarpeta=$_POST['codigoarchivocar'];
							echo "<form name='formulario' method='post' action='central.php'>";
							
									echo "<td align='center'>";
										echo "<input type='submit' name='Eliminar".$num."' value='Eliminar' class='transparente' />";
									echo "</td>";
									
									echo "<td align='center' WIDTH='1'>";
									echo  "<input type='hidden' name='madrecarp' value='$temporal' />";
									echo "</td>";
									
									echo "<td align='center' WIDTH='1'>";
									echo  "<input type='hidden' name='codigoarchivocar' value='".$tempidcarpeta."' />";
									echo "</td>";
									
									echo "<td align='center'>";
										echo  "<input type='hidden' name='codigoarchivo' value='".$f['idarchivo']."' />";
									echo "</td>";
									
									echo "<td align='center'>";
										echo  "<input type='hidden' name='department' value='".$Areas."' />";
									echo "</td>";
									
									echo "<td align='center'>";
										echo  "<input type='hidden' name='number' value='".$num."' />";
									echo "</td>";
									
									
							echo "</form>";
							}
						echo "</tr>";
						
							
					}
				
				//FIN ARCHIVOS
		}
			
		
		
		
		
					echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						
						echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						
						echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
					
						echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						//echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
				
						//echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						echo "<td align='center'>&nbsp&nbsp&nbsp</td>";
						echo "</table>";
						
						
						
						
		
	?>
</table>	

</body>
</html>