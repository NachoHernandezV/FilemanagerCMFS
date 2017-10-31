<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INGRESAR</title>
</head>
<style type="text/css">   

.verde {
	-moz-box-shadow: 0px 10px 14px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 14px -7px #3e7327;
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
	background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
	background-color:#77b55a;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:4px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.verde:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.verde:active {
	position:relative;
	top:1px;
}
	  
.tb5 {
	background-color : #F0FFFF;
	border:2px solid #008B8B;
	border-radius:5px;
	height: 22px;
	width: 130px;
}
</style>
<body background="fondogeneral.png">
<div align="center">



<table border="0" >
		<tr>
			<td ALIGN=CENTER></td>
		<td ALIGN=CENTER><img src="publico/imagenes/logo.png" alt="Filemanager" width="320" height="300"></td>
		</tr>
		<tr>
			<td ALIGN=CENTER></td>
			<td ALIGN=CENTER><font size=3 face="verdana" style="color:#000000">File Managaner</font></td>
		</tr>
		<tr>
			<td ALIGN=CENTER></td>
			<td  ALIGN=CENTER><img src="publico/imagenes/nube.png" alt="Filemanager" width="140" height="80"></td>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<tr></tr><tr></tr>
		<form action="principal.php" method="POST">
			<tr>
				<td ALIGN=right></td>
				<td ALIGN=CENTER>
					<font size=2 face="verdana" style="color:#44822F">&nbsp&nbsp&nbsp&nbsp&nbspUsuario</font>
					<input  class="tb5" type="text" size="13" name="usuario" id="usuario">
				</td>
			</tr>
			<tr>
				<td ALIGN=right></td>
				<td ALIGN=CENTER>
					<font size=2 face="verdana"  style="color:#44822F">Contraseña</font>
					<input class="tb5" type="password" size="13" name="pass" id="pass">
				</td>
			</tr>
			<tr>
				<td ALIGN=CENTER></td>
				<td ALIGN=center>
				<font size=2 face="verdana" style="color:#44822F">&nbsp&nbsp&nbsp</font>
					<input class="verde" type="submit" value="Ingresar" name="Ingresar" id="Ingresar">
				</td>
			</tr>
		</form>
</table>	
</div>
<?php


//recibir los datos
$Ingresar = $_POST["Ingresar"];
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];

$_SESSION['usuarioname']=$usuario;
$_SESSION['password']=$pass;


$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getBrowser($user_agent){

if(strpos($user_agent, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($user_agent, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($user_agent, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($user_agent, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No hemos podido detectar su navegador';


}


$navegador = getBrowser($user_agent);





if($Ingresar == "Ingresar")
{

//coneccion con la base
$link = new mysqli("localhost", "root", "pirineos", "almacenararchivos");
/* comprobar la conexión */
if ($link->connect_error)
{
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}
//


	//obtener todos los departamentos
	$consultaarchivos="SELECT * FROM departamentos";
	$re=mysqli_query($link,$consultaarchivos);
	$j=0;
	while ($depart=mysqli_fetch_array($re)) 
	{
				
		$departament[$j]=$depart['departamento'];
		$j++;
						
	}	
	///////

	
	for($i=0;$i<40; $i++) //OBTENER LA CONSULTA
	{
		
		$sql="Select * from usuarios where nombre='".$usuario."' and password='".$pass."' and departamento='".$departament[$i]."'";
		$query[$i]=mysqli_query($link,$sql);
		//$parteUsuarios[$i]=mysqli_fetch_array($query[$i]);
	}
	///////
	
	$bandera=0;
	for($i=0;$i<40; $i++)   //mandar A LA VENTANA SEGUN EL AREA
	{
		if($existe = mysqli_fetch_object($query[$i])) 
		{
		//echo $parteUsuarios[$i]." clave";	
			if($existe->nivelpermiso == "E")  //IDENTIFICAR SI ES USUARIO estandar
			{
				$_SESSION['general']="si";
				$_SESSION['depart']=$departament[$i];
				echo '<script>window.location="publico/filemanager.php"</script>';
				$bandera=1;
				$_SESSION['explorador']=$navegador;
			}
			if($existe->nivelpermiso == "S")  //IDENTIFICAR SI ES USUARIO super
			{
				$_SESSION['general']="si";
				$_SESSION['depart']=$departament[$i];
				echo '<script>window.location="privado/filemanager.php"</script>';
				$bandera=1;
				$_SESSION['explorador']=$navegador;
			}
			
		}
		

	}
	
	
	if($usuario == "" or $pass == "" ) //detectar VACIO
	{
		echo "No se puede ingresar usuario o contraseña vacio";
	}
	if($bandera==0)
	{
		echo "usuario incorrecto o no registrado";
	}


	

}//fin del if de ingresar

?>

</body>
</html>