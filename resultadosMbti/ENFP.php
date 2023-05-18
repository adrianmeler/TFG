<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/enfp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ENFP</h1>
    <div class="ejemploenfp">
        <div id="divEnfp">
        <img src="../imgMbti/Robert Downey.png" alt="" id="imgenfp">
        </div>
        <p class="quote">"I think you end up doing the stuff you were supposed to do at the time you were supposed to do it."
            -Robert Downey Jr
        </p>
    </div>
</div>

<div class="container">
<br>
<p>En el trabajo, el ENFP está preocupado por utilizar su creatividad para expresarse y beneficiar a los demás. Los ENFP quieren explorar las posibilidades para sí mismos y otras personas, y abordan su trabajo con visión e inspiración. Disfrutan asumiendo problemas creativos o centrados en las personas que requieren una solución imaginativa y original.</p>

<p>Los ENFP a menudo están motivados por sus creencias en causas humanitarias y quieren trabajar en consonancia con sus valores. Están particularmente interesados en ayudar a otras personas a desarrollarse como individuos. Tienden a elegir carreras que les permiten perseguir ideales de crecimiento personal y expresión artística.</p>

<p>Los ENFP no les gusta el trabajo rutinario y quieren una variedad de tareas y desafíos. Prefieren establecer su propio horario y se molestan cuando se les carga con excesivas regulaciones o detalles mundanos. Buscan tareas divertidas y novedosas que les permitan ser imaginativos y relacionarse con otras personas de una manera no estructurada y de apoyo.</p>

<p>El ambiente de trabajo ideal para un ENFP es relajado y amigable, con pocas restricciones a la creatividad. El trabajo ideal para un ENFP les permite seguir su inspiración, satisfacer su curiosidad y desarrollar soluciones que beneficien a las personas de manera innovadora y original.</p>

<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/journalist.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/actor.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/entepreneur.png" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

        <?php
        include("../conexion.php");

        if(!isset($_POST["guardar"])){

            echo '<form action="ENFP.php" method="POST">
            <p>Te damos la opcion de guardar tus resultados para que
            puedas consultarlos en otra ocasion en caso de que lo necesites</p>
            <br>
            <p>Quieres guardar tu resultado?</p>
            <br>
            <input type="submit" name="guardar" value="Guardar"
            <br>';

        }else{

            echo '<p>Resultados guardados!</p>';
            $resultado = 'ENFP';
            $fecha = date("y/m/d");
            $nombre = $_SESSION["nombre_unico"];
            $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
            $paquete = mysqli_query($conn,$query);
        }

        ?>

    <img src="../imgMbti/spiderman.jpg" id="imgGuardar"> 
    </div>
    </div>
</body>

</html>