<?php session_start();

require 'config.php';
require '../functions.php';

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();

// Conectamos a la base de datos
$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}

// Comprobamos si los datos han sido enviados
if($_SERVER['REQUEST_METHOD'] == 'POST') { // Si el metodo de envio es POST entonces... 
    $titulo= limpiarDatos($_POST['titulo']);
    $extracto= limpiarDatos($_POST['extracto']);
// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
    $texto= $_POST['texto'];
    $thumb= $_FILES['thumb']['tmp_name'];

    // Direccion final del archivo incluyendo el nombre
	# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
	# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name']; // Definimos la ruta donde se guardara la imagen, la llamamos archivo_subido y le concatenamos la ruta de la carpeta de imagenes y el nombre de la imagen

    move_uploaded_file($thumb, $archivo_subido); // Mueve el archivo subido a la ruta especificada

    //Preparmos la consulta para insertar los datos en la base de datos
    $statement = $conexion->prepare(
        'INSERT INTO articulos (id, titulo, extracto, texto, thumb) 
        VALUES (null, :titulo, :extracto, :texto, :thumb)'
    );

    // Ejecutamos la consulta
    $statement->execute(array(                  // Ejecutamos la consulta y le pasamos los datos que queremos insertar en la base de datos
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: ' . RUTA . 'admin'); // Redireccionamos a la pagina principal del administrador
}


require '../vista/nuevo.view.php';


?>