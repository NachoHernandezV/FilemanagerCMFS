<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>File manager</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/Estilos.css">
	<meta name="generator" content="Geany 1.22" />
</head>

<body background="imagenes\fond5.png">
	<table align="center" border="0" width="100%" height="100%">
	
		<tr>
		
			<td width="13.5%" align="right" valign="middle">
				<img src="log4.png" alt="Smiley face" height="55" width="100">
			</td>
			
			<td align="left" valign="middle" width="22%">
			<FONT size="4" FACE="small fonts" color="#2A0A0A">Sistema de </br >Administrador de Archivos</FONT>
			</td>
			
			<td align="center" valign="middle">
			<FONT size="6" FACE="small fonts" color="#2A0A0A"><?php echo $_SESSION['depart'];?></FONT>
			</td>
			
			<form action=salir.php method=POST name="delet">
				<input type="hidden" name="salir2" value=salir2 > 
				<input type="hidden" name="salir" value="no" >
			<td align="right">
				<a href="salir.php" target="_top"><font size=2 face="Arial Black" color="red">Cerrar sesión</font></a>
			</td>
			</form>
			
		</tr>

	</table>
	
	
</body>
</html>