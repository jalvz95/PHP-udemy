<?php

header('Content-Type: application/json; charset=utf-8'); // Linea escrita para que el navegador sepa que el archivo es un JSON y no un HTML

$respuesta=[
    [
        'nombre' => 'Juan',
        'edad' => 20,
        'pais' => 'Mexico'
    ],
    [
        'nombre' => 'Pedro',
        'edad' => 30,
        'pais' => 'España'
    ],
    [
        'nombre' => 'Maria',
        'edad' => 40,
        'pais' => 'Argentina'
    ]
];

echo json_encode($respuesta);



?>