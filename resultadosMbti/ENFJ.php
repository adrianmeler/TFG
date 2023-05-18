<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/enfj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ENFJ</h1>
    <div class="ejemploenfj">
        <div id="divEnfj">
            <img src="../imgMbti/obama-g85d18f3f3_1920.jpg" alt="" id="imgenfj">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
<div class="container">
<br>
<p>En el trabajo, el ENFJ está motivado para organizar a otros y llevar a cabo cambios positivos. Los ENFJs son solucionadores de problemas entusiastas, especialmente cuando pueden utilizar su fuerte intuición sobre las personas para un buen propósito.</p>

<p>Los ENFJs se esfuerzan por la cooperación y trabajan mejor en un ambiente armonioso donde pueden apoyar a otras personas y fomentar su crecimiento. A menudo asumen un papel de mentor, viendo su objetivo principal como ayudar a otras personas a mejorar en lo que hacen.</p>

<p>Los ENFJs suelen ser atraídos por roles de liderazgo; naturalmente organizan a las personas para aprovechar sus talentos únicos. A menudo tienen una visión fuerte en su trabajo y disfrutan de poder utilizar su creatividad para desarrollar iniciativas innovadoras con un enfoque humanitario. Los ENFJs aprecian el trabajo en equipo y quieren tener los recursos organizativos para poner sus ideas en acción.</p>

<p>El ambiente de trabajo ideal para un ENFJ es orientado al futuro y centrado en las personas, con una clara misión humanitaria y un énfasis en la acción constructiva. El trabajo ideal para un ENFJ les permite desarrollar e implementar ideas que mejoren las circunstancias y el bienestar de otras personas.</p>

<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/therapist.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/hhrr.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/public.jpg" alt=""></div>
</div>

    <br>

    <div id="guardarResultados">

        <?php
        include("../conexion.php");

        if(!isset($_POST["guardar"])){

            echo '<form action="ENFJ.php" method="POST">
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
            $resultado = 'ENFJ';
            $fecha = date("y/m/d");
            $nombre = $_SESSION["nombre_unico"];
            $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
            $paquete = mysqli_query($conn,$query);
        }

        ?>
        
        <img src="../imgMbti/daenerys.jpg" id="imgGuardar">

    </div>
    </div>

    <script src="../js/header.js"></script>
</body>

</html>