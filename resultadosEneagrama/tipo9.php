<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo9.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
     <div class="portada">
    <h1>Tipo 9</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/lincoln.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
    <br>
    <div class="container">
    <p>Los Pacificadores son personas amables y conciliadoras, y se destacan por su habilidad para mediar y aconsejar en grupos de amigos o compañeros de trabajo. Trabajan duro detrás de escena para mantener la armonía y el flujo constante del grupo.

De niños, sabían cómo llevarse bien con cada compañero de clase, lo que los convierte en una gran adición a cualquier proyecto grupal. Pueden ver fácilmente los diferentes aspectos de un problema y tienden a no saltar a conclusiones rápidamente, si es que lo hacen.

Pacíficos y humildes, los Pacificadores son estables y amables, dispuestos a ir más allá para evitar conflictos. Aprecian las pequeñas cosas que hacen los demás y los placeres simples de la vida.

Los Nueves son parte del trío "centrado en el cuerpo" del Enneagrama, junto con el Ocho y el Uno. Los unos reprimen su ira y se enfocan en el autocontrol, mientras que los ochos expresan su ira y se enfocan en controlar a otros. Los Nueves, sin embargo, evitan su ira y se enfocan en mantener la paz interior.

Aunque parecen conciliadores, los Nueves resisten el control externo como un Ocho, pero lo hacen de manera pasiva. Esto puede resultar en tendencias pasivo-agresivas.

Muchos Nueves crecen en ambientes donde se vieron obligados a mediar conflictos entre padres u otros miembros de la familia. Desde que estuvieron rodeados de emociones más grandes, aprendieron desde temprana edad a subestimar las suyas.

Los Nueves saludables son mediadores y persuasores excepcionales que pueden ayudar a otras personas a comprender diferentes perspectivas. Sin embargo, los Nueves menos saludables pueden parecer apáticos, demasiado pasivos y muy autocríticos.

Los Nueves crecen cuando aprenden a conectarse más profundamente con su yo auténtico, priorizan sus propios deseos y expresan sus necesidades y deseos a otras personas.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/therapist.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/politician.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/psychologist.jpg" alt=""></div>
    </div>
<div id="guardarResultados">

    <?php
    include("../conexion.php");

    if(!isset($_POST["guardar"])){

        echo '<form action="tipo9.php" method="POST">
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
        $resultado = 'Tipo 9';
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