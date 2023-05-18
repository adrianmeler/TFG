<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo2.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
     <div class="portada">
    <h1>Tipo 2</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/celine.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
<br>
<div class="container">
    <p>Los Dadores son individuos altamente empáticos y compasivos que ponen las necesidades de los demás por encima de las suyas propias. Tienen habilidades intuitivas para anticipar las brechas emocionales de los demás y brindarles apoyo.

Encuentran una gran alegría en estar disponibles y son vistos como una fuente de aliento o un hombro en el que llorar. A través de las buenas y las malas, son el compañero y amigo incondicional.

Los Dos son estratégicos en cómo forman relaciones. Por lo general, son abiertos y populares, y se encuentran en una variedad de grupos y son apreciados por muchos. Su naturaleza alentadora y de apoyo atrae a personas de todas las etapas de su vida.

Los Dadores están motivados por su deseo de obtener aprobación de otras personas, a menudo a través de métodos indirectos. Los Dos tienen un motivo oculto e inconsciente en sus actos de amabilidad y a menudo asumen que los demás son iguales.

Un Dos no saludable puede parecer una persona que es desinteresada de manera superficial. O alguien que apoya y da a los demás a expensas de dañarse a sí mismos o a otra persona, como habilitar a un adicto.

Los eneatipos Dos son parte del triángulo "centrado en el corazón" del Eneagrama, junto con los tipos 3 y 4. Este triángulo se enfoca en la emoción de tristeza como resultado de sentir que el individuo no es amado por quien realmente es.

Cuando eran niños, los Dos a menudo crecieron en entornos donde sintieron que sus necesidades emocionales básicas no eran satisfechas. Por lo tanto, aprendieron a adaptarse a las expectativas de los demás desde temprano y reprimir sus propios deseos en un esfuerzo por apoyar a otras personas.

Los Type Dos saludables pueden servir a los demás mientras satisfacen sus propias necesidades. También saben cómo amarse y aceptarse a sí mismos como son, y dependen menos de la aprobación de otras personas.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/teacher.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/psychologist.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/hhrr.jpg" alt=""></div>
    </div>
    <br>

    <div id="guardarResultados">

        <?php
        include("../conexion.php");

        if(!isset($_POST["guardar"])){

            echo '<form action="tipo2.php" method="POST">
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
            $resultado = 'Tipo 2';
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