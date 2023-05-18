<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo6.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
    <div class="portada">
    <h1>Tipo 6</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/biden.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
    <br>
    <div class="container">
    <p>Los Seis son individuos responsables y dedicados que buscan pertenecer a un grupo social y encontrar su lugar en el mundo.

Los Seis se manifiestan de dos maneras diferentes. Pueden ser Fóbicos o Contrafóbicos, lo que se refiere a su energía nerviosa y cómo se presenta al mundo exterior.

Los Seis Fóbicos se alejan deliberadamente de la fuente(s) de su miedo y tienden a pasar desapercibidos. Son abiertos y expresivos acerca de sus vulnerabilidades y debilidades, para que los demás puedan entender su situación y forma de pensar. Este es su mecanismo principal de defensa para evitar ser manipulados.

Los Seis Contrafóbicos, por otro lado, tienen un miedo irracional y muy nervioso al miedo en sí mismo, lo que paradójicamente puede traducirse en un comportamiento que desafía las reglas. Tratan de mantener una imagen de independencia en la superficie: una apariencia dura para proteger su persistente incertidumbre interna.

Cuando era niño, el Seis pudo haber crecido en un ambiente inseguro, tener guardianes sobreprotectores o haber experimentado un evento traumático que moldeó su visión del mundo. Este tipo ve el mundo como un lugar peligroso: cualquier cosa o persona fuera del círculo de confianza del Seis es una amenaza potencial.

Los Seis son tipos extremadamente lógicos. Están constantemente planeando y estrategizando para futuros eventos y cómo protegerse a sí mismos y a sus seres queridos del daño. Cuando piensas en el estereotipo de un "supervivencialista", es probable que estés imaginando a alguien con varias características del Enneagrama Seis.

El Enneagrama Seis es parte de la tríada "basada en la cabeza", junto con el Tipo Cinco y el Tipo Siete. Cada uno de estos tipos maneja el miedo como una emoción central, pero ningún tipo aborda el miedo de manera tan directa como lo hace el Seis.

Un Seis saludable es una persona a la que querrías tener de tu lado: son leales, confiables, honestos y protectores. Cuando son menos saludables, el Seis puede adquirir el hábito de tomar decisiones basadas en el miedo y crear profecías autocumplidas.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/paralegal.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/financial.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/nurse.jpg" alt=""></div>
    </div>
<div id="guardarResultados">

    <?php
    include("../conexion.php");

    if(!isset($_POST["guardar"])){

        echo '<form action="tipo6.php" method="POST">
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
        $resultado = 'Tipo 6';
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