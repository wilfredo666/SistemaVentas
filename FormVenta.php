<?php
include "header.php";
?>
<h3>Ventas</h3>
<label for="">Cliente:</label>
<input type="text">
<table>
    <tr>
        <td>Producto</td>
        <td>Precio</td>
        <td>Cantidad</td>
        <td>Precio Total</td>
        <td><input type="button" value="Agregar"></td>
    </tr>
    <tr>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="text"></td>
        <td><input type="button" value="Quitar"></td>
    </tr>
    <tr>
       <td colspan="2"></td>
        <td>Total</td>
        <td><input type="text" readonly></td>
    </tr>
</table>

<?php
include "footer.php";
?>