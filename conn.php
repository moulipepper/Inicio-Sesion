<?php
$host="localhost";
$dbusu="root";
$dbpass="";
$dbname="validar";
$conn= mysqli_connect($host,$dbusu,$dbpass,$dbname);
if ($conn->connect_error){
    header("CONECTION ERROR");
}


?>