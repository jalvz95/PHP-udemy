<?php

#switch
#Un switch es una estructura de control que nos permite comparar una variable con diferentes valores hasta encontrar una coincidencia y ejecutar un bloque de codigo

#Ejemplo 1
$dia= 'saito';

switch($dia) {
    case 'Lunes':
        echo "Hoy es Lunes";
        break;
    case 'Martes':
        echo "Hoy es Martes";
        break;
    case 'Miercoles':
        echo "Hoy es Miercoles";
        break;
    case 'Jueves':
        echo "Hoy es Jueves";
        break;
    case 'Viernes':
        echo "Hoy es Viernes";
        break;
    case 'Sabado':
        echo "Hoy es Sabado";
        break;
    case 'Domingo':
        echo "Hoy es Domingo";
        break;
    default:
        echo "No es un dia de la semana";
}






?>