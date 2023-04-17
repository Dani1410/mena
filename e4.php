<?php

$tipo_compra = "ropa";
$total_compra = 15.0;
$precio_envio = 9;

if ($total_compra > 0 && $total_compra < 19) {
    switch ($tipo_compra) {
        case "mascota":
            echo "<p>No se puede realizar el envío.</p>";
            break;
        case "ropa":
            echo "<p>Los gastos de envío son $precio_envio euros</p>";
            break;
        default:
            echo "<p>Tipo de compra invalida</p>";
            break;
    }
} else if ($total_compra > 19 && $total_compra < 40) {
    echo "<p>Los gastos de envío son $precio_envio euros</p>";
} else if ($total_compra > 40 && $total_compra < 200) {
    echo "<p>Los gastos de envío son gratis</p>";
} else if ($total_compra > 200) {
    echo "<p>Usa este codigo para obtener un descuento en tu proxima compra ¡¡ CODIGODESC33 !! </p>";
}
