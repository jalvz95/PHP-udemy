<?php

#Condicionales
#Condicional if
/* Operadores de comparacion:
== igual
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
! Negacion
&& And
|| Or

 */

/*if (condición) {
    # código a ejecutar si la condición es verdadera
}else if (condición) {
    # código a ejecutar si la condición es verdadera
}else {
    # código a ejecutar si la condición es falsa
*/

#Ejemplo 1
$numero= 10;

if($numero > 5) {
    echo "El numero es mayor a 5";
}else {
    echo "El numero es menor a 5";
}

#Ejemplo 2
$mes= "Diciembre";

if($mes == "Diciembre") {
    echo "Feliz Navidad";
}else if ($mes == "Enero") {
    echo "Feliz Año Nuevo";
}else if($mes== "Julio") {
    echo "Feliz Vacaciones";
}else {
    echo "El mes no tiene ninguna celebracion";
}

?>