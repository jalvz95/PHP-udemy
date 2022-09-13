<?php

#Metodo Post
# Aqui podemos escribir una condicion, si no hay datos que reciba, redirecciona a index.php
if (!$_POST){
    header('Location: index.php');}

// print_r($_POST); //Array asociativo que contiene los datos del formulario
//Para acceder a los datos del formulario se usa $_POST['nombre_del_campo_del_formulario']
//Ejemplo:
//echo $_POST['nombre'];

$nombre = $_POST['nombre'];#Por comidad podemos usar variables para acceder a los datos del formulario
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];
echo 'Hola ' . $nombre . ' eres ' . $sexo . ' naciste en ' . $year . ' y aceptaste los terminos? ' . $terminos;


#Metodo Get
//No se utiliza para enviar datos sensibles, ya que los datos se envian en la URL

?>