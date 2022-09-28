<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e83cbce0e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Galeria en PHP-SQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
           <?php foreach ($fotos as $foto) :?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['ID'];?>">
                        <img src="img/<?php echo $foto['imagen']; ?>" alt=""> <!-- La ruta foto[''] es la ruta a la cual corresponde el campo en la base de datos-->
                    </a>
                </div>
           <?php endforeach?>

        <div class="paginacion">
            <?php if ($pagina_actual>1):?>
                <a href="index.php?p=<?php echo $pagina_actual - 1;?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
            <?php endif?>  
            
            <?php if ($total_paginas != $pagina_actual):?>
                <a href="index.php?p=<?php echo $pagina_actual + 1;?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
            <?php endif?>
            </div>  
        </div>

</section>

<footer>
    <p class="copyright">Galeria recreada por Jalvarez-pinguins'club</p>
</footer>
</body>
</html>