<?php
 $destino="consorcios.trayan@gmail.com";
 $nombre=$_POST["nombre"];
 $edificio=$_POST["edificio"];;
 $whatsapp=$_POST["Whatsapp"];
 $correo=$_POST["correo"];
 $mensaje=$_POST["mensaje"];
 $contenido="Nombre: ".$nombre."\nEdidicio: ".$edificio."\nWhatsapp: ".$whatsapp."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: index.php");
?>