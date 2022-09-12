<?php

/* Operadores Aritmeticos:
+ Suma
- Resta
* Multiplicacion
/ Division
% Modulo
** Exponente
*/

#Ejemplo 1
$numero1= 10;
$numero2= 5;
$resultado= $numero1 + $numero2;
//echo "EL resultado es: $resultado";

/* Operadores de asignacion:
= Asignacion
+= Suma
-= Resta
*= Multiplicacion
/= Division
%= Modulo
**= Exponente
#Se usan cuando se quiere hacer una operacion y asignar el resultado a una variable
*/

#Ejemplo 2
$numero= 10;
$numero += 5; #Esto es igual a $numero= $numero + 5;
//echo "El resultado es: $numero";

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

#Ejemplo 3
$numero1= 10;
$numero2= "10";

if($numero1 === $numero2) {
    echo "Los numeros son iguales";
}else {
    echo "Los numeros son diferentes";
}
 
/*Operadores logicos
&& And
|| Or
! Negacion
xor
 */

#Ejemplo 4
$numero1= 10;
if ($numero1 >= 5 && $numero1 < 15) {
    echo "El numero esta entre 5 y 15";
}else {
    echo "El numero no esta entre 5 y 15";
}

/* Operadores de incremento y decremento
++ Incremento
-- Decremento
++$a Pre-incremento (incrementa $a en uno, luego devuelve $a)
$a++ Post-incremento (devuelve $a, luego incrementa $a en uno)
--$a Pre-decremento 
$a-- Post-decremento
 */  

 #Ejemplo 5
 $num= 10;
    $num++;
    echo $num;

/* Operadores de cadena
. Concatenacion
.= Concatenacion asignacion
 */

#Ejemplo 6
$nombre= "Juan";
$apellido= "Perez"; // or
$nmbreCompleto= $nombre . " " . $apellido;
//echo $nombre . " " . $apellido;
echo $nmbreCompleto;

?>