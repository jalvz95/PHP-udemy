<?php require 'header.php'; ?>

<!---->
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $singlePost['titulo']; ?></h2>
                <p class="fecha"><?php echo fecha($singlePost['fecha']); ?></p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA?>/img/<?php echo $singlePost['thumb']; ?>" alt="<?php echo $singlePost['titulo']; ?>">
                    </a>
                </div>
                <p class="extracto"><?php echo nl2br($singlePost['texto']); ?></p> <!-nl2br se usa para respetar espaciado al momento de subir texto desde la vista admin->
            </article>
        </div>
    </div>

<?php require 'footer.php'?>