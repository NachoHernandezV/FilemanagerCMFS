<?php
session_start();
?>
<?php
if($salir2=="salir2")
{
	$_SESSION['general']="no";
}
if($_SESSION['general'] != "si") // MANDA A VENTANA DE VENTAS
{	
	$_SESSION['general']="no";
	echo '<script>window.location="salir.php"</script>';	
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<frameset rows="13%,*" border="0" frameborder="0">
		
		<frame name="alto" target="alto" src="alto.php" border="0" frameborder="0">
		
		<frameset cols="23%,77%"> 
		<frame name="lateralizq" target="lateral" src="lateralizq.php">
		<frame name="central" target="central" src="central.php">
		</frameset> 

</frameset>




</body>
</html>