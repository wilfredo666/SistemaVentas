<link rel="stylesheet" href="../assets/css/generico.css">
<h2>Lista de empleados</h2>
<br>
<table>
  <tr>
    <th>Nombre(s)</th>
    <th>C.I.</th>
    <th>Telefono(s)</th>
    <th>Sexo</th>
    <th>Direccion</th>
    <th>Cargo</th>
    <th>Fecha de nacimiento</th>
    <td></td>
  </tr>
  <?php
    include "../conexion.php";
    /* consultando la lista de empleados */
    $empleado_sql=mysqli_query($conectador,"SELECT * FROM empleado");

    while($empleado=mysqli_fetch_array($empleado_sql)){
    ?>
    <tr>
        <td><?php echo $empleado[1]." ".$empleado[2]." ".$empleado[3];?></td>
        <td><?php echo $empleado[4];?></td>
        <td><?php echo $empleado[5];?></td>
        <td><?php echo $empleado[6];?></td>
        <td><?php echo $empleado[7];?></td>
        <td><?php echo $empleado[8];?></td>
        <td><?php echo $empleado[9];?></td>
        <td><a href="EliminarEmpleado.php?id_empleado=<?php echo $empleado[0];?>">Eliminar</a>
    <a href="FormEditarEmpleado.php?id_empleado=<?php echo $empleado[0];?>">Editar</a></td>
    </tr>
    <?php
        }
    ?>
</table>
<a href="../empleado.php">Atras...</a>
<?php
include "../footer.php"
?>