<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
                <?php foreach($articulos as $articulo): ?>
                    <li><?php echo $articulo['id'] . '.- ' . $articulo['articulo']; ?></li>
                <?php endforeach; ?>
            </ul>
        <section class="paginacion">
            <ul>
                <!-- Establecemos cuando el boton de 'Anterior' estara deshabilitado -->
                <?php if($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1; ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Ejecutamos un Ciclo para mostrr las paginas -->
                <?php 
                    for($i=1; $i <= $nmeroPaginas; $i++){
                        if($pagina == $i){
                            echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        } else {
                            echo "<li><a href='?pagina=$i'>$i</a></li>";
                        }
                    }
                ?>
                <!-- Establecemos cuando el boton de 'Siguiente' estara deshabilitado -->
                <?php if($pagina == $nmeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1; ?>">&raquo;</a></li>
                <?php endif; ?> 
                <!--<li class="disabled">&laquo;</li>
                <li class="active"> <a href="#">1</a></li>
                <li> <a href="#">2</a></li>
                <li> <a href="#">3</a></li>
                <li> <a href="#">4</a></li>
                <li><a href="#">&raquo;</a></li>-->
            </ul>
        </section>


    </div>
</body>
</html>