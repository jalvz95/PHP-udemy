<?php

#Arreglos multidimensionales
#Los arreglos multidimensionales son arreglos que tienen un arreglo dentro de otro arreglo

$amigos = array(
    array(
        'nombre' => 'Jhoset',
        'apellido' => 'Alvarez',
        'edad' => 25,
        'pais' => 'Venezuela',
        'lenguajes' => array('PHP', 'JavaScript'),
        'es_soltero' => true,
        'telefono'=> 1132528,
    ),
    array(
        'nombre' => 'Karla',
        'apellido' => 'Marquez',
        'edad' => 20,
        'pais' => 'Venezuela',
        'lenguajes' => array('PHP', 'JavaScript'),
        'es_soltero' => true,
        'telefono'=> 1132528,
    ),
    array(
        'nombre' => 'Jose',
        'apellido' => 'Alvarez',
        'edad' => 49,
        'pais' => 'Venezuela',
        'lenguajes' => array('PHP', 'JavaScript'),
        'es_soltero' => true,
        'telefono'=> 1132528,
    ),
);

 //echo $amigos [0]['nombre']; echo $amigos [0]['lenguajes'][0]; # Se trae cada dato de manera individual

#Para acceder a los elementos de un arreglo multidimensional
#Tenemos que usar dos corchetes
#El primer corchete es para acceder al arreglo
#El segundo corchete es para acceder al elemento del arreglo
#Ejemplo: $amigos[0]['nombre'] = Jhoset

$familiares = array(
    array('Jose','Alvarez',49,'Padre'),
    array('Karla','Marquez',20,'Hija'),
    array('Jhoset','Alvarez',25,'Hijo'),
);

//echo $familiares[0][1];

#Ejemplo de como imprimir los elementos de un arreglo multidimensional
#Usando un ciclo for
for($i = 0; $i < count($familiares); $i++){
    echo $familiares[$i][0] . ' ' . $familiares[$i][1] . ' ' . $familiares[$i][2] . ' ' . $familiares[$i][3] . '<br/>';
}

for($x =0; $x < count($amigos); $x++){
    echo $amigos[$x]['nombre'] . ' ' . $amigos[$x]['apellido'] . ' ' . $amigos[$x]['edad'] . ' ' . $amigos[$x]['pais'] . ' ' . $amigos[$x]['lenguajes'][0] . ' ' . $amigos[$x]['lenguajes'][1] . ' ' . $amigos[$x]['es_soltero'] . ' ' . $amigos[$x]['telefono'] . '<br/>';
}

?>