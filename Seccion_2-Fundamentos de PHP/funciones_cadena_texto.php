<?php

#Funciones de cadena de texto
#Las funciones de cadena de texto nos permiten manipular cadenas de texto
#Caracteres especiales podrian ser
#$texto = '< > $ % & /';
// htmlspecialchars($texto); #Convierte caracteres especiales en entidades HTML
#Esto nos permite evitar ataques de inyeccion de codigo ( Muy util cuando trabajamos con formularios)

// trim($texto); #Elimina espacios en blanco al inicio y al final de un texto

// strlen($texto); #Cuenta la cantidad de caracteres de un texto

// substr($texto, 0, 5); #Extrae una parte de un texto
#El primer parametro es el texto
#El segundo parametro es la posicion de inicio
#El tercer parametro es la cantidad de caracteres a extraer

// strtoupper($texto); #Convierte un texto a mayusculas
// strtolower($texto); #Convierte un texto a minusculas

// str_replace('texto a buscar', 'texto a reemplazar', $texto); #Reemplaza un texto por otro

// strpos($texto, 'texto a buscar'); #Busca la posicion de un texto
#Si el texto no existe nos devuelve un false

/* https://www.php.net/manual/en/ref.strings.php */
#Lista de funciones de string






?>