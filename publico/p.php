<?php
    $archivo = "doc1.pdf";
    if( file_exists($archivo) )
    {
        // Enviamos el PDF al cliente
         header("Content-type: application/pdf");
         header("Content-Disposition: attachment; filename=".$archivo);
         header("Content-length: ".filesize($archivo));
         readfile($archivo);
    }
?>