<DOCTYPE html>  
<html lang="es">  
    <head>  
        <meta charset="utf-8"/>  
        <title>Descargas</title>  
    </head>  
	
    <body>  
	<div align="center">
        <header>  
            <h1>Este tipo de archivo no se puede visualizar el navegador </h1>  
            <h2>El programa ha descargado el archivo para que lo pueda usar</h2>    
        </header>  
        <section>  
            <article> 
				<br><br>			
                <p>Descarga exitosa</p>  
                <img src="imagenes/descargas.png" width="300" height="300"/>                 
            </article>  
        </section>  
        <aside>  
        </aside>  
        <footer>  
            <h2>Advertencia</h2>  
            <p>Todas las descargas son responsabilidad de quien las realiza</p>  
        </footer> 
			</div>
    </body>  

<?php
//Para Insertar el Archivo de actividad para Abrir!
	date_default_timezone_set('America/Monterrey');
	include 'Datos/conexion.php';

$f=$_POST[nombrereal];
$nombrearchivoreal2=$_POST[nombre2];
$url="archivos/".$nombrearchivoreal2."/".$f;

//codigo para insertar la actividad de abrir un archivo
		$fecha=date("Y-m-d H:i");
		$departamentoc=$_SESSION['depart'];
		$user=$_POST[usuario];
		$accion="Abrio el archivo ".$f;
		$consultaarchivo="INSERT INTO `actividad` (`Usuario`, `Accion`, `Fecha`) VALUES ('$user','$accion','$fecha')";
		mysqli_query($con,$consultaarchivo);
//fin de la actividad

$anchoPHP = "<script> document.write(ancho) </script>";
$altoPHP = "<script> document.write(alto) </script>";
//echo $anchoPHP." ".$altoPHP;

//echo $f."  --- ".$nombrearchivoreal2.$url;
		echo "<td align='center' colspan='3'>";

		if(strcmp($anchoPHP,"1920") !== 0)
			echo "<embed src='$url' href='$url' width='1920' height='1080' ></embed>";

		elseif(strcmp($anchoPHP,"1600") !== 0)
			echo "<embed src='$url' href='$url' width='1600' height='900' ></embed>";
		elseif(strcmp($anchoPHP,"1366") !== 0)
			echo "<embed src='$url' href='$url' width='1366' height='768' ></embed>";
		elseif(strcmp($anchoPHP,"1360") !== 0)
			echo "<embed src='$url' href='$url' width='1360' height='768' ></embed>";
		elseif(strcmp($anchoPHP,"1280") !== 0)
			echo "<embed src='$url' href='$url' width='1280' height='1024' ></embed>";
		elseif(strcmp($anchoPHP,"1152") !== 0)
			echo "<embed src='$url' href='$url' width='1152' height='864' ></embed>";
		elseif(strcmp($anchoPHP,"1024") !== 0)
			echo "<embed src='$url' href='$url' width='1360' height='768' ></embed>";
		elseif(strcmp($anchoPHP,"800") !== 0)
			echo "<embed src='$url' href='$url' width='800' height='600' ></embed>";
		else
		echo "<embed src='$url' href='$url' width='1800' height='600' ></embed>";
	
		//echo "<A HREF=\""."archivos/".$nombrearchivoreal2."/".$f."\"/>Abrir</A>";
		echo "</td>";
		
echo "</table>";
?>
	
</html>  
 