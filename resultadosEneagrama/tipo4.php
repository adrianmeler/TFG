<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo4.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
     <div class="portada">
    <h1>Tipo 4</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/rihanna.png" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
    <br>

    <div class="container">
    <p>Los individualistas pueden destacarse ante los demás por su elección única de moda, estilo de vida e intereses no convencionales o por su trabajo creativo. Son fuera de lo común pero encantadores, los Individualistas tienen un impulso implacable por descubrir y comprender quiénes son realmente, en lo más profundo. La creación, no el consumo, es la clave de su bienestar.

Los Cuatros pasan gran parte de su tiempo reflexionando sobre el pasado y usando experiencias y sentimientos como un trampolín para musitar creativamente y emprender nuevos proyectos.

A través de un proceso de exploración continua del yo interior (los lados consciente e inconsciente), los Individualistas producen trabajo original, sin las expectativas de los demás.

Los Individualistas luchan con un apego a las partes de sí mismos que ven como deficientes. Los Cuatros tienden a sobre-identificarse como personas más defectuosas que otras. Desvaloran los aspectos positivos de su personalidad e idealizan los rasgos positivos en otras personas.

En su mejor momento, los Cuatros son extremadamente creativos, compasivos y conscientes de sí mismos. En su peor momento, pueden ser autovictimizadores y autodestructivos.

Al igual que los Tipos Dos y Tres, los Cuatros forman parte de la tríada "basada en el corazón" del eneagrama. La emoción central de los tipos en esta tríada es la tristeza. Los Cuatros, los Dos y los Tres luchan por sentir que no pueden ser amados por quienes son.

Los Cuatros, sin embargo, son los más propensos a abrazar este dolor, en lugar de reprimirlo o sentirse en conflicto por él. La tristeza puede adoptar una forma de identidad para este tipo.

Los Individualistas Cuatros tienen una relación profunda y compleja con sus emociones. El crecimiento ocurre cuando los Cuatros aprenden a salir de su cabeza y a estar abiertos a experimentar el amor y la aceptación verdadera de otras personas.</p>

    <div class="row">
        <div class="col-lg-4">
        <img src="../imgMbti/journalist.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/musician.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/graphic.jpg" alt=""></div>
    </div>

<div id="guardarResultados">

    <?php
    include("../conexion.php");

    if(!isset($_POST["guardar"])){

        echo '<form action="tipo4.php" method="POST">
        <p>Te damos la opcion de guardar tus resultados para que
        puedas consultarlos en otra ocasion en caso de que lo necesites</p>
        <br>
        <p>Quieres guardar tu resultado?</p>
        <br>
        <input type="submit" name="guardar" value="Guardar"
        <br>
        ';

    }else{

        echo '<p>Resultados guardados!</p>';
        $resultado = 'Tipo 4';
        $fecha = date("y/m/d");
        $nombre = $_SESSION["nombre_unico"];
        $query = "INSERT INTO resultadoseneagrama(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
        $paquete = mysqli_query($conn,$query);
    }

    ?>

</div>
</div>
</body>

</html>