<?php

#Spaceship operator
#Nos permite comparar dos valores, y nos retorna un valor de -1, 0 o 1
#Si el primer valor es menor que el segundo, retorna -1
#Si el primer valor es igual que el segundo, retorna 0
#Si el primer valor es mayor que el segundo, retorna 1

// <    =    >
// 1    0    -1

echo 1 <=> 1; #Retorna 0
echo '<br/>';
echo 1 <=> 2; #Retorna -1
echo '<br/>';
echo 2 <=> 1; #Retorna 1
echo '<br/>';
////////////////////////////////////////////////////////////////////////////

$arreglo= [
    10,
    20,
    30,
    40,
    50,
    60,
    70,
    80,
    90,
    100
];

// sort($arreglo); #Ordena el arreglo de menor a mayor

function comparar($a, $b) {
    return $a <=> $b;
}
usort($arreglo, 'comparar'); #Ordena el arreglo de menor a mayor

echo implode(' - ', $arreglo); #Implode nos permite unir los elementos de un arreglo, en este caso, se unen con un guion








?>