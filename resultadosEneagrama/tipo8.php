<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tipo8.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globaleneagrama.css">
</head>

<body>
<?php
    include("headerEneagrama.php");
    ?>
     <div class="portada">
    <h1>Tipo 8</h1>
    <div class="ejemplo">
        <div class="imgEneagrama">
            <img src="../img/martin.jpg" alt="">
        </div>
        <p class="quote">"The future rewards those who press on. I don't have time to feel sorry for myself. I don't have time to complain. I'm going to press on." 
            -Barack Obama
        </p>
    </div>
</div>
    <br>
    <div class="container">
    <p>Orientados hacia metas y autosuficientes, los Retadores abren caminos audazmente en todos los aspectos de la vida y se enorgullecen de su independencia y mentes agudas. Mantienen la cabeza en alto y se levantan rápidamente después de cada tropiezo, más fuertes que antes.

Los Ocho se rebelan contra las normas de la sociedad. Las opiniones de los demás no tienen ningún efecto en su posición respecto a un tema, ya que se enorgullecen de ser totalmente capaces y autosuficientes.

Fuertes defensores de los demás, los Ocho se preocupan por la justicia, la lucha contra la opresión y la protección de los débiles. Ven al mundo como compuesto por personas "fuertes" y "débiles" y, por lo tanto, se consideran responsables de proteger a quienes no lo son.

Los Ocho son enérgicos y directos. Este tipo no se muestra tímido a la hora de tomar la iniciativa y tomar decisiones difíciles. No tienen miedo al conflicto y no siempre se preocupan por los límites o las fronteras. Típicamente toman el control durante proyectos en grupo o reuniones y se sienten cómodos en posiciones de liderazgo.

Como niños, pueden haber sido llamados "mandones" por sus compañeros. Muchos Ocho crecen en un ambiente conflictivo y sienten que tienen que adoptar una personalidad fuerte desde temprana edad para sobrevivir.

Los Retadores forman parte del triángulo de la eneagrama que se enfoca en el cuerpo, junto con el Tipo Uno y el Tipo Nueve. La emoción central experimentada por este triángulo es la ira. Mientras que los unos y los nueves más o menos reprimen o ignoran su ira, los Ocho no tienen problemas para acceder a ella, a menudo expresándola de forma impulsiva.

Los Ocho saludables son líderes valientes y carismáticos que defienden a sí mismos y a los demás. Los Ocho menos saludables pueden arruinar relaciones en su camino hacia el poder y la autoridad. Los Ocho crecen cuando aprenden a acceder a su vulnerabilidad y debilidades.</p>

    <div class="row">
        <div class="col-lg-4">
            <img src="../imgMbti/director.jpg" alt="">
        </div>
        <div class="col-lg-4"><img src="../imgMbti/business.jpg" alt=""></div>
        <div class="col-lg-4"><img src="../imgMbti/sales.jpg" alt=""></div>
    </div>
<div id="guardarResultados">

    <?php
    include("../conexion.php");

    if(!isset($_POST["guardar"])){

        echo '<form action="tipo8.php" method="POST">
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
        $resultado = 'Tipo 8';
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