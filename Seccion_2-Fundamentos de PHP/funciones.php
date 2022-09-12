<?php

#Funciones
#Las funciones son bloques de codigo que se pueden reutilizar y podemos programarlas para que realicen una tarea especifica y nos devuelvan un resultado
#Las funciones se definen con la palabra reservada function
#Las funciones pueden recibir parametros y retornar valores
#Las funciones pueden ser definidas por el usuario o por el lenguaje
#Las funciones pueden ser definidas en cualquier parte del codigo, pero es recomendable definirlas al inicio del codigo

#Algunas funciones ya vistas son:
#-print_r: Nos permite ver el tipo de dato y el valor de la variable
#-var_dump: Nos permite ver el tipo de dato y el valor de la variable ( de una manera mas especifica)
#-echo: Nos permite mostrar informacion en pantalla
#-isset: Nos permite saber si una variable esta definida o no
#-empty: Nos permite saber si una variable esta vacia o no
#-count: Nos permite saber cuantos elementos tiene un arreglo
#-is_array: Nos permite saber si una variable es un arreglo o no
#-is_string: Nos permite saber si una variable es un texto o no
#-is_int: Nos permite saber si una variable es un numero entero o no
#-is_float: Nos permite saber si una variable es un numero decimal o no
#-is_bool: Nos permite saber si una variable es un booleano o no
#-is_null: Nos permite saber si una variable es nula o no
#-trim: Nos permite eliminar espacios en blanco al inicio y al final de un texto
#sort: Nos permite ordenar un arreglo de menor a mayor
#rsort: Nos permite ordenar un arreglo de mayor a menor

#Ejemplo de funcion
function saludar($nombr){
    return "Hola $nombr<br>";
}
#Para llamar a la funcion se utiliza el nombre de la funcion seguido de parentesis
saludar("karla");
#Parametros
#Los parametros son variables que se definen en la funcion y que se pueden utilizar dentro de la funcion
#Los parametros son opcionales
#Los parametros pueden tener un valor por defecto
#Los parametros pueden ser de cualquier tipo

#Ejemplo de funcion con parametros
function despedir($nombre){
    return "Adios, $nombre";
}
despedir("Juan<br>");

#Ejemplo 2:
function sumar($num1, $num2){
    $resultado = $num1 + $num2;
    return "El resultado es: $resultado<br>"; #return nos permite retornar un valor
    #Cuando se ejecuta un return la funcion se detiene y no se ejecuta el resto del codigo
    #Solo se puede retornar un valor
}
sumar(5, 10);
#Ejemplo 3:
#Calcular el area de un triangulo   
function area_triangulo($base, $altura){
    $area = ($base * $altura) / 2;
   // return "El area del triangulo es: $area<br>"; #tratemos de que la funcion solo retorne un dato.
    return $area;
}
echo 'El area del triangulo es: ' . area_triangulo(10, 5) .' metros cuadrados.<br/>';
?>