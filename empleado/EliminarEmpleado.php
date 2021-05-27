<?php
include "../conexion.php";

//capturando el id de emplado
$id=$_GET["id_empleado"];

mysqli_query($conectador, "delete from empleado where id_empleado='$id'");

header("location:listarEmpleado.php");
?>