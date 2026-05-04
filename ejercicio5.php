<?php

$numeros = [];

echo "Ingrese números (escriba 'fin' para terminar):\n";

while (true) {
    $entrada = trim(fgets(STDIN));
    if (strtolower($entrada) == "fin") {
        break;
    }
    if (!is_numeric($entrada)) {
        echo "Entrada inválida. Intente de nuevo:\n";
        continue;
    }

    $numeros[] = $entrada;
}


$cantidad = count($numeros);

if ($cantidad == 0) {
    echo "No se ingresaron datos.\n";
    exit;
}


$suma = array_sum($numeros);
$media = $suma / $cantidad;

$suma_cuadrados = 0;

foreach ($numeros as $num) {
    $suma_cuadrados += pow($num - $media, 2);
}

$desviacion = sqrt($suma_cuadrados / $cantidad);


echo "Cantidad de datos: $cantidad\n";
echo "Media: $media\n";
echo "Desviación estándar: $desviacion\n";

?>