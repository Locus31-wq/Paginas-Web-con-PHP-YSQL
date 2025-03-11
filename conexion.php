<?php
 
 include("conexion.php");

 if(isset($_POST['SEND'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ){
        $name = trin($_POST['name']);
        $name = trin($_POST['Phone']);
        $name = trin($_POST['email']);
        $name = trin($_POST['message']);
        $consulta = "INSERT INTD datos(nombre, telefono, email, mensaje)
        VALUES('$name', '$phone', '$email', '$message')";
        $resultado = mysqli_query($conex, $consulta);
    }
 }

?>