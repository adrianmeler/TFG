<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/entj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ENTJ</h1>
    <div class="ejemploentj">
        <div id="divEntj">
            <img src="../imgMbti/steve-jobs-g75bec3012_1920.jpg" alt="" id="imgentj">
        </div>
        <p class="quote">"Technology is nothing. What's important is that you have a faith in people, that they're basically good and smart, and if you give them tools, they'll do wonderful things with them."
            -Steve Jobs
        </p>
    </div>
</div>

<div class="container">
<br>
<p>Los ENTJ son atraídos por posiciones de liderazgo que les permiten desarrollar estrategias para lograr una mayor eficiencia y productividad. Prefieren estar en roles de gestión o supervisión y desean la capacidad de iniciar y liderar cambios organizacionales.</p>

<p>Los ENTJ disfrutan del desafío de resolver problemas difíciles y les gusta entender sistemas complejos para determinar dónde es posible mejorar. Los ENTJ ven naturalmente oportunidades para mejorar sistemas y quieren liderar equipos para llevar a cabo su visión. Aprecian un ambiente donde se fomente la innovación y donde las tradiciones no sean sagradas.</p>

<p>Los ENTJ quieren estructura en su trabajo. Prefieren que su trabajo y el de sus colegas sean evaluados en base a un conjunto de directrices claras. Aprecian un ambiente que sea profesional y justo, donde el desempeño se evalúe objetivamente y se recompense generosamente. Los ENTJ son típicamente motivados y trabajadores, y quieren ser reconocidos por sus esfuerzos con dinero, poder y prestigio.</p>

<p>Una organización ideal para un ENTJ valora la competencia y el pensamiento lógico, e incluye compañeros de trabajo que sean inteligentes y ambiciosos. Un trabajo ideal para un ENTJ es aquel que los desafía a abordar problemas complejos con planificación estratégica y objetivos claros.</p>


<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/ceo.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/lawyer.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/consultant.jpg" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ENTJ.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ENTJ';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/strange.png" id="imgGuardar"> 
</div>

</div>

</body>

</html>