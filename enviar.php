<?php
    $destino= "jisaacbv@gmail.com";
    $nombre= $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $mensaje= $_POST["menssage"];
    $contenido =  " Nombre: " . $nombre . "\nCorreo: " . $email . "\nTeléfono: " . $phone . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto", $contenido);

?>  