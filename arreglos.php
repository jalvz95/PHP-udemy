<?php

#Los arreglos son estructuras de datos que nos permiten almacenar varios valores en una sola variable
#Los arreglos se definen con la función array()
#Los arreglos se definen con corchetes []

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$semana[10] = 'Nuevo dia'; #Podemos agregar un nuevo elemento al arreglo en la posición que queramos

$arreglo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; #Otra forma de definir un arreglo
//echo $semana[1];

$arreglo1 = array('cadena de texto',10, array('a', 'b', 'c'), true); 
#Dentro del arreglo podemos tener cualquier tipo de dato
#Podemos tener un arreglo dentro de otro arreglo
#Ejemplo en el que mostramos los dias de la semana a partir de nuestro arreglo $semana
/*echo $semana[0] . '<br/>'; # Lunes
echo $semana[1] . '<br/>'; # Martes
echo $semana[2] . '<br/>'; # Miercoles
echo $semana[3] . '<br/>'; # Jueves
echo $semana[4] . '<br/>'; # Viernes
echo $semana[5] . '<br/>'; # Sabado
echo $semana[6] . '<br/>'; # Domingo*/

#Esta seria la forma facil de acceder a los elementos del arreglo
#Podemos concatenar los elementos del arreglo con un br para que se muestren en diferentes lineas
#Pero si quisieramos acceder a los elementos del arreglo de forma dinamica
#Podemos usar la función count() para saber cuantos elementos tiene el arreglo
#Y usar un ciclo for para recorrer el arreglo

?>