<?php

$alumnos = [];

$total = 50;


for ($i = 1; $i <= $total; $i++) {

    echo "\nAlumno $i\n";

    echo "Código: ";
    $codigo = trim(fgets(STDIN));

    echo "Nombre: ";
    $nombre = trim(fgets(STDIN));


    function leerNota($mensaje) {
        while (true) {
            echo $mensaje;
            $nota = trim(fgets(STDIN));

            if (!is_numeric($nota) || $nota < 1.0 || $nota > 5.0) {
                echo "Nota inválida (debe estar entre 1.0 y 5.0)\n";
                continue;
            }
            return $nota;
        }
    }

    $n1 = leerNota("Nota 1: ");
    $n2 = leerNota("Nota 2: ");
    $n3 = leerNota("Nota 3: ");

    $final = ($n1 + $n2 + $n3) / 3;


    $alumnos[] = [
        "codigo" => $codigo,
        "nombre" => $nombre,
        "n1" => $n1,
        "n2" => $n2,
        "n3" => $n3,
        "final" => $final
    ];
}


$aprobados = [];
$recuperan = [];
$maximos = [];

foreach ($alumnos as $al) {

    if ($al["final"] >= 3.0) {
        $aprobados[] = $al;
    } elseif ($al["final"] >= 2.0 && $al["final"] <= 2.9) {
        $recuperan[] = $al;
    }

    if (round($al["final"],1) == 5.0) {
        $maximos[] = $al;
    }
}


function imprimirTabla($titulo, $lista) {
    echo "\n===== $titulo =====\n";
    echo "Código | Nombre | Final\n";

    foreach ($lista as $al) {
        echo $al["codigo"] . " | " . $al["nombre"] . " | " . number_format($al["final"],2) . "\n";
    }

    echo "Total: " . count($lista) . "\n";
}


imprimirTabla("APROBADOS", $aprobados);
imprimirTabla("RECUPERACIÓN", $recuperan);
imprimirTabla("CALIFICACIÓN MÁXIMA (5.0)", $maximos);

?>