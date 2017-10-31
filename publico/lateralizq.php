<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>File manager</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/Estilos.css">
	<meta name="generator" content="Geany 1.22" />
	
<style type="text/css">	
button {
 border: none;
 background: #3a7999;
 color: #f2f2f2;
 padding: 10px;
 font-size: 18px;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}


button:before {
 content:'';
 position: absolute;
 top: 0px;
 left: 0px;
 width: 0px;
 height: 42px;
 background: rgba(255,255,255,0.3);
 border-radius: 5px;
 transition: all 2s ease;
}


button:hover:before {
 width: 100%;
}

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
	width:200px;
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



	</style>
</head>
<body background="fond2.png">
<div align="center">

	<h1>
	<FONT size="6" FACE="small fonts" color="#190707">Menu Pricipal</FONT>
	</h1>

	<table align="center">

		<tr>
				<td><FONT size="5" FACE="small fonts" color="#3B170B"><strong>&nbsp<strong></FONT>	</td>
		</tr>
		
	
		
		<form action="central.php" target="central" method="post" enctype="multipart/form-data">

	
			<tr>
				<td align="center"><FONT size="4" FACE="small fonts" color="#3B170B"><strong>Areas que comparten archivos<strong></FONT></td>
			</tr>
			<tr>
				
				<td align="center">
					
					<SELECT NAME="Areas" class="turquesa" onchange="this.form.submit()"> 
					<?php
					include 'Datos/conexion.php';
					
					$departamentoUSER=$_SESSION['depart'];

					
					$consultapermiso = "SELECT * FROM permisosusuarios pu, usuarios u WHERE pu.idusuario=u.idusuario and u.nombre='".$_SESSION['usuarioname']."' and password='".$_SESSION['password']."'";
					$permisosareas=mysqli_query($con,$consultapermiso);
					$columpermisosareas=mysqli_fetch_array($permisosareas);
					
					//echo $columpermisosareas['Almacen']."Hola";
					
					//$consultaarchivos="SELECT * FROM departamentos ORDER BY departamento ASC ";
					$consultaarchivos="SELECT * FROM departamentos LIMIT 38";
					$re=mysqli_query($con,$consultaarchivos);
					
					$contadornum=0;
					while ($depart=mysqli_fetch_array($re)) 
					{
						
						$columna=$depart['departamentoJunto'];
						
						if($contadornum==0)
						{
							echo "<OPTION VALUE='inicio' >Seleccione una Area</OPTION>";
						}
						
						if($departamentoUSER == $depart['departamento'])
						{
							
						}
						else
						{
							if($columpermisosareas[$columna] == 'si')
							{
								echo "<OPTION VALUE='".$depart['departamentoJunto']."' >".$depart['departamento']."</OPTION>";
								
							}
						}
						
						$contadornum=1;
					}	
						$i=0;
				
					?>
					   
					</SELECT>
				</td><!--columna 3 -->
				
			</tr>
			<?php
			function detect()
			{
				$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
				$os=array("WIN","MAC","LINUX");
				# definimos unos valores por defecto para el navegador y el sistema operativo

				$info['browser'] = "OTHER";
				$info['os'] = "OTHER";
				# buscamos el navegador con su sistema operativo

				foreach($browser as $parent)
				{
					$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
					$f = $s + strlen($parent);
					$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
					$version = preg_replace('/[^0-9,.]/','',$version);
					
					if ($s)
					{
						$info['browser'] = $parent;
						$info['version'] = $version;
					}
				}
				# obtenemos el sistema operativo
				foreach($os as $val)
				{
					if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
						$info['os'] = $val;
				}
				# devolvemos el array de valores
				return $info;
			}
				
				$info=detect();

				
				if($info["browser"]=='FIREFOX')
				{
					echo "<tr>";
					echo "<td align='center'><input type='submit' name='Enviar' value='Enviar' class='turquesa' /></td>";
					echo "</tr>";
				}
			?>
			
		
		
		</form>
	</table>
	
	
	<br/>
	<br/>
	<br/><br/>
	<br/>
	
	<table align="center">
	<form action="central.php" target="central" method="post" enctype="multipart/form-data">
				<tr>
					<td align="center"><FONT size="4" FACE="small fonts" color="#3B170B"><strong>Mis Archivos Subidos</strong></FONT></td>
				</tr>
				<tr>
					
					<td align="center"><input type="submit" name="MisArchivos" class="turquesa" value="Mis Archivos" /></td><!--columna 1 -->
				</tr>
		</form>
		<tr>
			<td><FONT size="5" FACE="small fonts" color="#3B170B"><strong>&nbsp<strong></FONT></td>
		</tr>
	
		<tr>
			<td align="center"><FONT size="4" FACE="small fonts" color="#3B170B"><strong>Agregar archivos<strong></FONT></td>
		</tr>
	
		<tr>
		
		<td align="center"><input type="submit" value="Subir" class="turquesa" onclick="window.open('index.php','nuevaVentana','width=700, height=585')" /></td>
		</tr>
		
		<tr>
			<td align="center"><FONT size="4" FACE="small fonts" color="#3B170B"><strong>Carpetas<strong></FONT></td>
		</tr>
	
		<tr>
		
		<td align="center"><input type="submit" value="Crear" class="turquesa" onclick="window.open('crearcarpeta.php','nuevaVentana2','width=440, height=450')" /></td>
		</tr>
	</table>
</body>
</html>