<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/infp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>

<div class="portada">
    <h1>INFP</h1>
    <div class="ejemploinfp">
        <div id="divInfp">
        <img src="../imgMbti/tolkien.jpg" alt="" id="imginfp">
        </div>
        <p class="quote">"I have a dream that my four little children will one day live in a nation where they will not be judged by the color of their skin, but by the content of their character."
            -Martin Luther King
        </p>
    </div>
</div>
<div class="container">
<br>
<p>En el trabajo, el INFP no está particularmente impulsado por el dinero o el estatus, prefiriendo trabajos que se alineen con sus valores personales y les permitan ayudar a los demás. Los INFP suelen estar motivados por la visión y la inspiración, y quieren participar en proyectos y causas que les parezcan importantes.</p>

<p>Los INFP disfrutan del proceso de resolución creativa de problemas, y quieren comprender problemas complejos. Aprecian la innovación y quieren idear ideas originales para mejorar las circunstancias de las personas. Un trabajo ideal para un Sanador les permite expresar su individualidad en la forma en que trabajan y aprovechar su capacidad para ver soluciones únicas.</p>

<p>Los INFP disfrutan trabajando de forma autónoma y teniendo control sobre cómo y cuándo completar un proyecto. A menudo disfrutan participando en equipos, aunque quieren ser libres de dejar su propia marca personal en su trabajo. Cuando trabajan con otras personas, es importante para el INFP que sean cooperativos, solidarios y flexibles, y que tengan una pasión similar por sus ideales.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/artist.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/graphic.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/photographer.jpg" alt=""></div>
</div>
<br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="INFP.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'INFP';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/frodo.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>