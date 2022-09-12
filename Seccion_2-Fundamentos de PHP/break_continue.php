<?php

$cpus = array (
    'Intel', 'AMD', 'Celeron', 'Athlon', 'Pentium',
    'Core i3', 'Core i5', 'Core i7', 'Core i9'
);

/*foreach($cpus as $cpu){
    echo $cpu . "<br>";
    #Si pusieramos el break aca, el ciclo se detendria en la primera iteracion.
    if($cpu == 'Core i7'){ #Aqui se detiene el ciclo debido a que se cumple la condicion.
        break;              #break detiene el ciclo.
    }
}*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Team azul</h1>

    <?php
    
    foreach($cpus as $cpu){
        if($cpu == 'AMD'|| $cpu == 'Athlon'|| $cpu == 'Celeron'){ # Con || podemos seguir a;aadiendo condiciones.
            continue;   #continue detiene la iteracion actual y continua con la siguiente.
                        #Pero no detiene el ciclo a diferencia de break.
        }
        echo $cpu . "<br>";
    }
    
    
    
    ?>
</body>
</html>