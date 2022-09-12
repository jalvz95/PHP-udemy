<?php
#Funciones matematicas
#Las funciones matematicas nos permiten realizar operaciones matematicas

$numero= 15.54584;
echo round ($numero,5) .'<br>'; #Redondea un numero tanto para arriba como para abajo

echo ceil ($numero).'<br>'; #Redondea un numero hacia arriba

echo floor ($numero).'<br>'; #Redondea un numero hacia abajo

$num_random = rand(1,10); #Genera un numero aleatorio entre 1 y 10
echo $num_random.'<br>';





?>