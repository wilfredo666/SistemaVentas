<?php
include "../conexion.php";

/* datos obtenidos de FormRegEmpleado.php */
echo $id=$_GET["id_empleado"];
echo $nombre=$_POST["nombre"];
echo $apellidoPaterno=$_POST["apellidoPaterno"];
echo $apellidoMaterno=$_POST["apellidoMaterno"];
echo $ci=$_POST["ci"];
echo $telefono=$_POST["telefono"];
echo $sexo=$_POST["sexo"];
echo $direccion=$_POST["direccion"];
echo $cargo=$_POST["cargo"];
echo $fechaNacimiento=$_POST["fechaNacimiento"];

/* consulta de registro */
mysqli_query($conectador, "update empleado set
nombre='$nombre', apellido_pat='$apellidoPaterno', apellido_mat='$apellidoMaterno', ci_empleado='$ci', telefono='$telefono', sexo='$sexo', direccion='$direccion', cargo='$cargo', fecha_nacimiento='$fechaNacimiento' where id_empleado='$id'");

header("location:listarEmpleado.php");
?>