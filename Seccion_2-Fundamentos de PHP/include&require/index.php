<?php

#Queremos mantener la parte logicas de nuestro codigo separada de la parte visual
#Para ello creamos un archivo index.view.php que contendra la parte visual
#Y en el archivo index.php, incluiremos el archivo index.view.php
#Para incluir el archivo index.view.php, usamos la funcion include
#La funcion include, incluye el archivo index.view.php en el archivo index.php
#Si el archivo index.view.php no existe, la funcion include mostrara un warning y el programa continuara su ejecucion

function suma($a, $b){
    return $a + $b;
}

include 'index.view.php';

#La funcion include en caso de conseguir un error, mostrara un warning y el programa continuara su ejecucion

#La funcion require, en caso de conseguir un error, mostrara un fatal error y el programa se detendra

#Tambien tenemos la funcion include_once y require_once
#Estas funciones funcionan igual que include y require, pero solo incluyen el archivo una vez
#Si el archivo ya ha sido incluido, no lo incluye de nuevo

?>