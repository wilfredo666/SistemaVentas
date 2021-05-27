<?php
include "../conexion.php";

/* datos obtenidos de FormRegEmpleado.php */
$nombre=$_POST["nombre"];
$apellidoPaterno=$_POST["apellidoPaterno"];
$apellidoMaterno=$_POST["apellidoMaterno"];
$ci=$_POST["ci"];
$telefono=$_POST["telefono"];
$sexo=$_POST["sexo"];
$direccion=$_POST["direccion"];
$cargo=$_POST["cargo"];
$fechaNacimiento=$_POST["fechaNacimiento"];

/* consulta de registro */
mysqli_query($conectador, "insert into empleado
(nombre, apellido_pat, apellido_mat, ci_empleado, telefono, sexo, direccion, cargo, fecha_nacimiento)
values ('$nombre','$apellidoPaterno','$apellidoMaterno','$ci','$telefono','$sexo','$direccion','$cargo','$fechaNacimiento')");
header("location:listarEmpleado.php");
?>