<?php

#Esta es una forma de validar el tipo de metodo que se esta usando para enviar el formulario
/*if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Se esta usando GET";
}else{
    echo "Se esta usando POST";
}*/

#Otra forma de hacerlo seria la siguiente
if(isset($_POST['submit'])){
    echo "Se han enviado los datos correctamente";
}
?>