<?php

if (isset($_COOKIE['font-size'])) {
    $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else {
    $tamaño = '15px';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: <?php $fuentetm; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium minima obcaecati voluptatum consectetur similique excepturi, accusamus nulla itaque, eius error tenetur nihil quia in dicta. Corporis vel nesciunt numquam reprehenderit.
    
    </p>
</body>
</html>