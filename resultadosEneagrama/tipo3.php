<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo3.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
   <div class="portada">
    <h1>Tipo 3</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/Tony.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
<br>
<div class="container">
    <p>Pulidos y sofisticados, los Logradores tienen un gusto particular por las cosas bonitas de la vida. Tienen la capacidad de ser altamente productivos para alcanzar sus objetivos y altos estándares. Su meta es ser recordados y apreciados por sus descubrimientos y creaciones, ser los mejores.

Inteligentes, ambiciosos y típicamente bien vestidos, los Logradores logran y superan objetivos constantemente. Su rendimiento y dedicación son admirados por otros e incluso pueden inspirarlos a tomar acción.

Los Logradores suelen tener horarios llenos de eventos y reuniones profesionales para mantenerse ocupados y en movimiento.

En su mejor momento, los Logradores tienden a ser modelos de rol seguros de sí mismos, energéticos y humildes que inspiran a otros. Este tipo puede ser increíblemente productivo, incluso un "adicto al trabajo". Tienden a vestirse bien y disfrutar de materiales y experiencias que proyecten una imagen de riqueza o éxito.

Un Tres poco saludable puede parecer obsesivo, auto-engrandecedor y malicioso. Pueden sacrificar a otras personas por su propio beneficio y parecer poco confiables.

Los Enneagram Threes forman parte del triángulo "basado en el corazón" del Enneagram, junto con los Tipos Dos y Cuatro. Este triángulo se enfoca en la emoción del dolor y la lucha por no sentirse amados tal y como son.

De niños, es probable que este tipo haya aprendido desde temprana edad que el logro resultaba en amor y reconocimiento, por lo que establecieron su identidad en ganar atención a través del éxito.

Los Tres buscan proyectar una imagen específica de sí mismos y reprimen sus sentimientos internos. Este tipo puede tener dificultades para comprender sus propias emociones, ya que se enfocan en lo que quieren hacer y lograr.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/entepreneur.png" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/surgeon.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/politician.jpg" alt=""></div>
    </div>
    <br>

    <div id="guardarResultados">

        <?php
        include("../conexion.php");

        if(!isset($_POST["guardar"])){

            echo '<form action="tipo3.php" method="POST">
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
            $resultado = 'Tipo 3';
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