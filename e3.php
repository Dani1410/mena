<?php

$total_compra = 0.0;

if ($total_compra <= 0) {
    echo "<b>Compra algo para continuar con la compra.</b>";
} else if ($total_compra > 0 && $total_compra < 30) {
    echo "<b>Compra más o te cobraremos los abusivos 30 euros de gastos de envío.</b>";
} else if ($total_compra > 30 && $total_compra < 90) {
    $restante = 90 - $total_compra;
    echo "<b>¡¡¡Con solo $restante € más podrás tener gastos de envío gratis!!!</b>";
} else if ($total_compra == 90) {
    echo "<b>¡Gastos de envio incluidos!</b>";
} else {
    echo "<b>La compra es mayor a 90 euros (envios incluidos)</b>";
}
