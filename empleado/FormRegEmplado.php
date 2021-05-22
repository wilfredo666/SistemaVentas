
<link rel="stylesheet" href="../assets/css/generico.css">
<form action="#" target="" method="get" name="formDatosPersonales">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>

    <label for="apellidos">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido materno"/>
    <label for="apellidos">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido Materno"/>

    <label/>C.I.:</label>
<input type="text" name="ci" id="ci" placeholder="Carnet de identidad" required />

<label/>Telefono</label>
<input type="text" name="telefono" id="telefono" placeholder="# de telefono" required />

<label>Email</label>
<input type="email" name="email" id="email" placeholder="email" required />

<label>Sexo</label>
<input type="radio" name="sexo" value="hombre">Hombre
<input type="radio" name="sexo" value="mujer">Mujer<br>

<label>Direccion</label>
<textarea name="direccion" id="direccion"placeholder="Direccion..."></textarea>

<label>Cargo</label>
<input type ="text" name="cargo" id="cargo" placeholder="Cargo del empleado"/>

<label>Fecha de nacimiento</label>
<input type="date" name="fechaNacimiento" id="fechaNacimiento">

<input type="submit" name="enviar" value="Registrar"/>
</form>
<a href="../empleado.php">Atras...</a>