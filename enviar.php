<?php  
    echo "Hola mundo";
    $destino= "jisaacbv@hotmail.com";
    $nombre= $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $mensaje= $_POST["menssage"];
    /* $contenido =  " Nombre: " . $nombre . "\nCorreo: " . $email . "\nTeléfono: " . $phone . "\nMensaje: " . $mensaje; */
    $contenido = "Recibiste este mensaje de tu Formulario TMP.\n\n"."Acá los detalles:\n\nNombre: $nombre\n\nCorreo: $email\n\nTeléfono: $phone\n\nMensaje:\n$mensaje";

    mail($destino,"Contacto",$contenido);


?>  