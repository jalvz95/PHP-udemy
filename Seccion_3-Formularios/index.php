<?php

if ($_POST){
    echo $_POST['nombre'];
    echo $_POST['sexo'];
    echo $_POST['year'];
    echo $_POST['terminos'];
}

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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
    <!--Para recibir los datos del formulario en el mismo index se puede usar el parrafo de arriba junto al action -->
        <input type="text" placeholder="Nombre" name="nombre" maxlength="20"><br>

        <!--Radio buttons-->
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">

        <label for="mujer">Mujer</label> <!-- Importante que el name en label sea igual para el radio button -->
        <input type="radio" name="sexo" value="mujer" id="mujer">

        <!--Combo Box-->
        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        <!--Para el option se podria hacer un ciclo en php para no escribir manualmente cada year-->
        </select><br>

        <!--Checkbox-->
        <label for="terminos">Acepta los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="Si"><br>

        <input type="submit" value="Enviar">


    </form>
</body>
</html>