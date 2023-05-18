<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo5.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
 <div class="portada">
    <h1>Tipo 5</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/mark.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
<br>
<div class="container">
    <p>Investigators are the pioneers of independent and critical thinking. They’re inquisitive and curious about the connections between underlying themes and the mysteries of the universe.

Usually introverted and analytical, Investigators gather and process information to build with and synthesize patterns and ideas.

Their work spaces are typically minimalist with the exception of a collection of items pertaining to their core interests. They’re also fiercely non-conformist and care little about trends or accepted ways of progressing through the stages of life.

Type Fives are the most introverted of the Enneagram types, in the sense that they direct the most focus and energy inward. Rather than focusing on relationships, the Five's primary focus is on gaining knowledge.

Because they have little energy for external demands, Fives are careful to conserve their energy for the things that matter most. This can make the individual appear withdrawn and disinterested in outer world events.

Investigators are part of the “head-based” triad of the Enneagram, along with the Type Six Skeptic and the Type Seven Enthusiast. The types in this triad are motivated by their varying responses to fear. Fives attempt to avoid fear and anxiety by withdrawing and carefully protecting their inner resources.

Fives are self-sufficient and crave freedom and autonomy from outer world influences. However, true growth for an Investigator happens when they learn how to let people in and open themselves up to receiving love and support.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/police.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/researcher.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/professor.jpg" alt=""></div>
    </div>
<div id="guardarResultados">

    <?php
    include("../conexion.php");

    if(!isset($_POST["guardar"])){

        echo '<form action="tipo5.php" method="POST">
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
        $resultado = 'Tipo 5';
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