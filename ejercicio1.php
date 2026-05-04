<?php
echo "Ingrese un año: ";
$anio = trim(fgets(STDIN));

if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
    echo "El año $anio es bisiesto";
} else {
    echo "El año $anio no es bisiesto";
}
?>