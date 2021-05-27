<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de ventas</title>
        <link rel="stylesheet" href="assets/css/login.css">
    </head>
    <body>  
        <div id="formulario">
            <form action="acceso.php" method="post">
                <div>
                    <label for="">Usuario</label>
                    <input type="text" name="usuario" required>
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <input type="submit" value="Acceso" id="acceso" required>
            </form>
        </div>
    </body>
</html>