<?php
//importando mi clase conexion
include "conexion.php";

$usuario=$_POST["usuario"];
$password=$_POST["password"];

$consulta="select * from usuario where nom_usuario='$usuario' and password='$password'";

$resultado=mysqli_query($conectador,$consulta);

$fila=mysqli_fetch_row($resultado);
if($fila>0){
    header("location:panel_admin.php");
}else{
    echo "Error de auntenticacion!!!";
}
mysqli_close($conectador);
?>