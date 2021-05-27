<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
</style>

<?php
include "../conexion.php";

//obtener el id de empleado
$id=$_GET["id_empleado"];

//obtener los datos de dicho empleado
$empleado_sql=mysqli_query($conectador,"SELECT * FROM empleado where id_empleado='$id'");

$empleado=mysqli_fetch_array($empleado_sql);
?>
<form action="EditEmpleado.php?id_empleado=<?php echo $empleado[0];?>" method="post">
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" value="<?php echo $empleado[1];?>" required/>

    <label for="apellidos">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido materno" value="<?php echo $empleado[2];?>"/>
    <label>Apellido Materno</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido Materno" value="<?php echo $empleado[3];?>"/>

    <label>C.I.:</label>
    <input type="text" name="ci" id="ci" placeholder="Carnet de identidad" value="<?php echo $empleado[4];?>" required />

    <label>Telefono</label>
    <input type="text" name="telefono" id="telefono" placeholder="# de telefono" value="<?php echo $empleado[5];?>" required />

    <label>Sexo</label>
    <?php 
    if($empleado[6]=="hombre"){
    ?>
    <input type="radio" name="sexo" value="hombre" checked>Hombre
    <input type="radio" name="sexo" value="mujer">Mujer
    <?php
    }else{
    ?>
    <input type="radio" name="sexo" value="hombre" >Hombre
    <input type="radio" name="sexo" value="mujer" checked>Mujer
    <?php
    }
    ?>
<br>
    <label>Direccion</label>
    <textarea name="direccion" id="direccion" placeholder="Direccion..."><?php echo $empleado[7];?></textarea>
    <br>
    <label>Cargo</label>
    <input type ="text" name="cargo" id="cargo" placeholder="Cargo del empleado" value="<?php echo $empleado[8];?>"/>
<br>
    <label>Fecha de nacimiento</label>
    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $empleado[9];?>">

    <input type="submit" name="enviar" value="Registrar"/>
