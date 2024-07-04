<?php
include ('conn.php');
$usu=$_POST["usuar"];
$pass=$_POST["passs"];
$consulta= "SELECT * FROM usuarios where usuario='$usu' and contraseña='$pass'";
$resultado= mysqli_query ($conn,$consulta);
$filas= mysqli_num_rows ($resultado);
if ($filas) {
    header ("location:./admin.php");
}else{
    header ("location:./index.php");
}
?>