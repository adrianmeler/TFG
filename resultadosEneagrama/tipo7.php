<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo7.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
    <div class="portada">
    <h1>Tipo 7</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/robin.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
    <br>
    <div class="container">
    <p>Con ojos muy abiertos y llenos hasta el borde de energía interminable, los entusiastas son los optimistas juguetones y ocupados del mundo.

Su curiosidad incansable por la nueva información y las experiencias se refleja en sus historias (a menudo impresionantes) y su habilidad para hablar. Al final de un día de trabajo, sus mentes a menudo siguen zumbando con nuevas ideas por explorar.

Son encantadores contadores de historias con pasión por muchos pasatiempos diferentes, y ven el vaso medio lleno. Brillantes y expresivos, los entusiastas ven el mundo como su patio de recreo y pueden considerarse los "niños eternos" del Enneagram.

Los Sietes buscan el placer y la emoción como una forma de distraerse de los aspectos más oscuros y dolorosos de la vida. Pertenecen al tríada "basada en la cabeza" del Enneagram, junto con los Tipos Cinco y Seis.

A diferencia del Seis, que enfrenta el miedo de manera directa, los Sietes están motivados para reprimir e ignorar los temores en favor de experiencias positivas. Por fuera, este tipo de búsqueda de emociones puede parecer intrépido, pero es cuando los Sietes aprenden a abrazar sus miedos que realmente crecen.

Optimistas y positivos, los Sietes pueden cambiar fácilmente las emociones negativas a positivas. Internamente, minimizan las experiencias negativas y buscan aspectos positivos. Cuando están saludables, los Sietes son personas extremadamente estimulantes e inspiradoras. Cuando están menos saludables, este tipo puede aparecer desconectado de la realidad, o incluso narcisista.

Los Sietes a menudo son muy imaginativos y creativos. Sobresalen en la creación de nuevas ideas e iniciativas, sin embargo, pueden tener dificultades para enfocarse y disciplinarse.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/photographer.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/publicist.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/interior.jpg" alt=""></div>
    </div>
<div id="guardarResultados">

    <?php
    include("../conexion.php");

    if(!isset($_POST["guardar"])){

        echo '<form action="tipo7.php" method="POST">
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
        $resultado = 'Tipo 7';
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