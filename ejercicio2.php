<?php

$archivo = "articulos-del-ejercicio-2.txt";

while (true) {

    echo "Ingrese el nombre del artículo o escriba 'fin' para terminar el ciclo): ";
    $nombre = trim(fgets(STDIN));

    if ($nombre == "fin") {
        echo "Se finalizo el programa y ya esta el archivo creado.";
        break;
    }


    if ($nombre == "") {
        echo "Error: el nombre no puede estar vacío.\n";
        continue;
    }

    echo "Ingrese la clave (01 o 02): ";
    $clave = trim(fgets(STDIN));

    if ($clave == "") {
        echo "Error: la clave no puede estar vacia.";
        continue;
    }

    if ($clave != "01" && $clave != "02") {
        echo "Error: clave inválida debe volver a registrar la informacion.\n";
        continue;
    }


    echo "Ingrese el precio original: ";
    $precio = trim(fgets(STDIN));

    if (!is_numeric($precio) || $precio <= 0) {
        echo "Error: precio inválido debe registrar nuevamente la informacion.\n";
        continue;
    }

    if ($clave == "01") {
        $descuento = 0.10;
    } else {
        $descuento = 0.20;
    }

    $precio_desc = $precio - ($precio * $descuento);


    $linea = "Nombre: $nombre | Clave: $clave | Precio: $precio | Descuento: $precio_desc\n";


    file_put_contents($archivo, $linea, FILE_APPEND);

    echo "Artículo guardado correctamente.\n";
}

?>