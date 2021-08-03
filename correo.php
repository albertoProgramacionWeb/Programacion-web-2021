<?php
    $destinatario='polloseco440@gmail.com';
    $nombre=$_POST['nombre'];
    $asunto=$_POST['asunto'];
    $mensaje=$_POST['Mensaje'];
    $email=$_POST['email'];

    // cncatenamos los parametros
    $Header="Enviado desde la www.AndeanLodges_Logistica.com";
    $mesajecompleto=$mensaje."\nAtentamente: ".$nombre;
    //con la funcion mail podemos enviar un correo
    mail($destinatario, $asunto, $mesajecompleto, $Header);
    echo "<script>alert('Correo Enviado')</script>";
    echo "<script>SetTime(\"location.href='index.html'\",1000)</script>";
?>