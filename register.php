<?php
include ('conn.php');
$usu=$_POST["usuar"];
$pass=$_POST["passs"];
$email=$_POST["ermail"];
DATE_DEFAULT_TIMEZONE_SET("America/Argentina/Buenos_Aires");
$fecha= date("d/m/y");
$registro= "INSERT INTO usuarios(usuario, contraseña, email, fecha) VALUES ('$usu', '$pass', '$email', '$fecha')";
     $resultado= mysqli_query($conn,$registro);
    if($resultado){
        echo "Estas registrado facha";
        header("location:./index.php");
    }else{
    echo "ERROR";
}

?>