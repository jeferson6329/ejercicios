<?php

for ($i = 1; $i <= 100; $i++) {

    echo "\nVendedor #$i\n";
    
    while (true) {
        echo "Ingrese el total de ventas del año en curso: ";
        $venta = trim(fgets(STDIN));

        if (!is_numeric($venta) || $venta < 0 || $venta > 10000000) {
            echo "Error: valor inválido digite un valor superior a 0 y menor que 10,000,000.\n";
            continue;
        }
        break;
    }

    if ($venta >= 1000000 && $venta < 3000000) {
        $porcentaje = 0.03;
    } elseif ($venta >= 3000000 && $venta < 5000000) {
        $porcentaje = 0.04;
    } elseif ($venta >= 5000000 && $venta < 7000000) {
        $porcentaje = 0.05;
    } elseif ($venta >= 7000000 && $venta < 10000000) {
        $porcentaje = 0.06;
    } else {
        $porcentaje = 0; 
    }

    $comision = $venta * $porcentaje;


    echo "ya que sus ventas fueron de $$venta Tiene una comisión de: $$comision\n";
    
}

?>