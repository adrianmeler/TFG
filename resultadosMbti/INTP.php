<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/intp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <h1>INTP</h1>
    <div class="ejemplointp">
        <div id="divIntp">
        <img src="../imgMbti/albert-einstein-gf02cbd6af_1920.jpg" alt="" id="imgintp">
        </div>
        <p class="quote">"Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning."
            -Albert Einstein
        </p>
    </div>
    <div class="container">
<br>
<p>En el trabajo, el INTP está motivado a resolver problemas complejos de una manera original e innovadora. Los Arquitectos quieren analizar sistemas e ideas a fondo para crear una comprensión profunda, y disfrutan diseñando soluciones creativas a problemas altamente abstractos.</p>

<p>Los INTP rara vez tienen mucho interés en las tradiciones organizacionales, prefieren forjar su propio camino hacia la innovación. Odian verse limitados por la burocracia y las reglas, y a menudo están más en sintonía con la solidez teórica de sus ideas que con las aplicaciones prácticas. Por lo general, prefieren enfocarse en crear la idea y dejar los detalles tediosos de la implementación a otra persona.</p>

<p>Los INTP trabajan mejor de forma independiente o con un pequeño equipo de colegas que perciben como inteligentes, competentes y lógicos. Se cansan rápidamente de los colegas que son agresivos o dominantes, y pueden ser despectivos con las personas que no son tan inteligentes como ellos.</p>

<p>Una organización ideal para un INTP es flexible y no tradicional, y valora la ingeniosidad sobre la conformidad. Un trabajo ideal para un INTP les permite abordar problemas teóricos o técnicos complejos con soluciones creativas y novedosas.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/researcher.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/MatHematician.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/professor.jpg" alt=""></div>
</div>

    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="INTP.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'INTP';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/neo.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>