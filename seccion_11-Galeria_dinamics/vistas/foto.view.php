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
            <h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])){
                echo $foto['titulo'];
            }else{ 
                echo $foto['imagen'];} ?></h1>
        </div>
    </header>

        <div class="contenedor">
            <div class="foto">
                <a href="#">
                    <img src="img/<?php echo $foto['imagen'];?>" alt="">
                </a>
                <p class="texto"><?php echo $foto['texto']?></p>
                <a href="javascript:history.back()" class="regresar"><i class=" fa fa-long-arrow-left"></i> Regresar</a>
            </div>
                    <!--href="javascript:history.back()"--> <!--Esta linea de codigo nos permite regresar a la pagina anterior-->
<footer>
    <p class="copyright">Galeria recreada por Jalvarez-pinguins'club</p>
</footer>
</body>
</html>