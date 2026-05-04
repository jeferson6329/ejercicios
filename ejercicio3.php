<?php
while (true) {
    echo "¿Cuánto es el valor de la compra?: ";
    $valor = trim(fgets(STDIN));

    if (!is_numeric($valor) || $valor <= 0) {
        echo "Entrada inválida. Introduce un valor numérico válido.\n";
        continue;
    }
    break;
}
while (true) {
    echo "¿Cuál es el número de la balota?: ";
    $numero = trim(fgets(STDIN));

    if (!is_numeric($numero)) {
        echo "Entrada inválida. Introduce un número válido.\n";
        continue;
    }
    break;
}

if ($numero < 74) {
    $porcentaje = 0.15;
    echo "Obtuvo un descuento del 15%.\n";
} else {
    $porcentaje = 0.20;
    echo "Obtuvo un descuento del 20%.\n";
}


$descuento = $valor * $porcentaje;
$total_pagar = $valor - $descuento;


echo "el descuento obtenido fue: $descuento\n";
echo "Total a pagar: $total_pagar\n";

?>