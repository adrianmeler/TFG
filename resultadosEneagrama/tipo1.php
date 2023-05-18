<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo1.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
    <?php
    include("headerEneagrama.php");
    ?>
 <div class="portada">
    <h1>Tipo 1</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/mobama.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
<br>
<div class="container">
    <p>Los perfeccionistas son pragmáticos responsables y serios. Quieren encontrar un propósito en sus vidas, en particular la capacidad de mejorar el bienestar de las personas y hacer las cosas mejor para el bien común.

Para lograr esto, utilizan su mejor juicio para encontrar soluciones que puedan aplicarse en el mundo real. Tienen un profundo aprecio e interés por la ética y a menudo dedican tiempo a evaluar y ajustar su brújula moral según sea necesario.

A menudo, los unos tienen una misión de vida clara delineada en su mente y trabajan muy duro detrás de escena para transformar esa poderosa visión en realidad, con un fuerte sentido del deber y tenacidad. Tranquilos y controlados, cumplen con sus palabras y compromisos.

Los perfeccionistas están dispuestos a ir más allá para asegurarse de que su trabajo sea de primera calidad y esté curado a la perfección. Se enorgullecen de diseñar horarios y planes simplificados para llevar a cabo tareas de la manera más eficiente posible; la optimización es una elección de estilo de vida.

Dentro de la estructura del Eneagrama, los unos pertenecen a la tríada "basada en el cuerpo", junto con el Tipo Ocho y el Tipo Nueve. Esta tríada se enfoca en la emoción central de la ira, que los unos manejan diseñando sus vidas en torno al orden y el control.

El perfeccionista siente que si todo está organizado y bajo control, no tendrá que preocuparse por experiencias emocionales negativas como la ira y la frustración. Como este tipo ve la ira como "incorrecta", la reprimirá, lo que en última instancia puede llevar a sentimientos de resentimiento, auto odio y arrepentimiento.

Los unos a menudo crecen en entornos donde hay mucho caos e incertidumbre. Debido a esto, los unos a menudo se sienten responsables de mantener todo unido. Siempre y cuando puedan mantener el orden, el uno cree que todo será "bueno".

Porque los unos creen que siempre tienen razón, pueden ser demasiado críticos tanto consigo mismos como con los demás. Los unos saludables aprenden a aceptar la imperfección y a aceptarse a sí mismos y a los demás tal como son, en lugar de centrarse en cómo "deberían" ser.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/lawyer.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/judge.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/social.jpg" alt=""></div>
    </div>

    <br>

    <div id="guardarResultados">

        <?php
        include("../conexion.php");

        if(!isset($_POST["guardar"])){

            echo '<form action="tipo1.php" method="POST">
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
            $resultado = 'Tipo 1';
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