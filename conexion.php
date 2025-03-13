<?php
   
include("conexion.php");


 if(isset($_POST['SEND'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ){
        $name = trim($_POST['name']);
        $name = trim($_POST['Phone']);
        $name = trim($_POST['email']);
        $name = trim($_POST['message']);
        $consulta = "INSERT INTD datos(nombre, telefono, email, mensaje)
        VALUES('$name', '$phone', '$email', '$message')";
        $resultado = mysqli_query($conex, $consulta);
    }
 }

?>