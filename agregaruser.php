<?php
session_start();

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

<form action="guardaruser/guardar.php" method="post" enctype="multipart/form-data">
		<table border="0">
		
		<tr>
			<td colspan="5" align="center">
				<img src="log4.png" alt="Smiley face" height="60" width="90">
				<FONT size="5" FACE="small fonts" color="#3B170B">Agregar Usuarios</FONT>
			</td>
		</tr>
	
		<tr>
			<td><FONT size="3" FACE="small fonts" color="#3B170B">&nbsp</FONT></td>
		</tr>
			<TR>
				
				<td colspan="5" align="center"><label>Usuario</label>
				<label><input type="text" name="usuario" /></label>
				</td>
			</TR>
			<TR>
				
				<td colspan="5" align="center"><label>Contraseña</label>
				<label><input type="text" name="pass" /></label>
				</td>
			</TR>
			
			<tr>
			<td colspan="5" align="center"><label>Departamentos</label>
			<SELECT NAME="departamentos[]" > 
			<?php
					/////////////////
					$server="localhost";
					$username="root";
					$password="pirineos";
					$db='almacenararchivos';
					
					$con=mysqli_connect($server,$username,$password,$db);
					mysqli_set_charset($con,"utf8");
					///////////		
					
						$consultaarchivos="SELECT * FROM departamentos";
						$re=mysqli_query($con,$consultaarchivos);
						$j=0;
							while ($depart=mysqli_fetch_array($re)) 
							{
										
								echo "<OPTION VALUE='".$depart['departamento']."' >".$depart['departamento']."</OPTION>";
												
							}										
			?>
			</td>
			</tr>
			
			<tr>
			
				<td colspan="5" align="center"><label>Nivel permiso</label>
				<SELECT NAME="nivelpermiso" > 
				<OPTION VALUE='E' >Estandar</OPTION>
				<OPTION VALUE='S' >Super User</OPTION>
				</td>
			</tr>
			
			<tr>
				<td><FONT size="1" FACE="small fonts" color="#3B170B"></FONT></td>
			</tr>
			<tr>
				
				<td><FONT size="3" FACE="small fonts" color="#3B170B"><strong>Areas que puede ver:</strong></FONT></td>
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
			
			/*$consultapermiso = "SELECT * FROM permisosusuarios pu, usuarios u WHERE pu.idusuario=u.idusuario and u.nombre='".$_SESSION['usuarioname']."' and password='".$_SESSION['password']."'";
					$permisosareas=mysqli_query($con,$consultapermiso);
					$columpermisosareas=mysqli_fetch_array($permisosareas);
					
					$c="Almacen";
					echo $columpermisosareas[$c]."Hola";*/
			
			$departamentoUSER=$_SESSION['depart'];
	
			
			//obtener todos los departamentos
			$consultaarchivos="SELECT * FROM departamentos";
			$re=mysqli_query($con,$consultaarchivos);
			$j=0;
			while ($depart=mysqli_fetch_array($re)) 
			{
						
				$departament[$j]=$depart['departamento'];
				$departament2[$j]=$depart['departamentoJunto'];
				$j=$j+1;;
								
			}	
			///////

			$par=0;
			$impar=1;
			
			$primero=0;
			$segundo=1;
			$tercero=2;
			
			$activador=0;
			for ($i = 0; $i <30; $i++) 
			{
				
				if($departamentoUSER==$departament[$i])
				{
					$activador=1;
				}
				else
				{
					echo "<tr>";
						//echo "<td></td>";
						
							if($departament[$primero]=="")
							{
								
							}
							else
							{
								echo "<td align='left'>";
								echo "<input name='".$departament2[$primero]."' type='checkbox' id='squaredFour".$primero."' checked='checked'/>";
								echo "<label for='squaredFour".$primero."'>$departament[$primero]</label>";	
								echo "</td>";
								echo "<td></td>";
							}
							
							
								if($departament[$segundo]=="")
							{
								
							}
							else
							{
								echo "<td align='left'>";
								echo "<input name='".$departament2[$segundo]."' type='checkbox' id='squaredFour".$segundo."' checked='checked'/>";
								echo "<label for='squaredFour".$segundo."'>$departament[$segundo]</label>";
								echo "</td>";
								echo "<td></td>";
							}		

								if($departament[$tercero]=="")
							{
								
							}
							else
							{
								echo "<td align='left'>";
								echo "<input name='".$departament2[$tercero]."' type='checkbox' id='squaredFour".$tercero."' checked='checked'/>";
								echo "<label for='squaredFour".$tercero."'>$departament[$tercero]</label>";
								echo "</td>";
							}									
					echo "</tr>";
				}
				
				
				if($activador==1)
				{
					$primero=$primero+1;
					$segundo=$segundo+1;
					$tercero=$tercero+1;
					$activador=0;
				}
				else{
					$primero=$primero+3;
					$segundo=$segundo+3;
					$tercero=$tercero+3;
				}
			}
			?>
		
			<tr>
				<td colspan="2"><input type="submit" value="Subir" Name="Subir" class="turquesa"/></td>
			</tr>
		</table>

		
</form>

</body>
</html>