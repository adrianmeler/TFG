<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/isfj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ISFJ</h1>
    <div class="ejemploisfj">
        <div id="divIsfj">
        <img src="../imgMbti/queen-gb04efdfac_1920.jpg" alt="" id="imgisfj">
        </div>
        <p class="quote">"Grief is the price we pay for love."
            -Elizabeth II
        </p>
    </div>
</div>
<div class="container">
<br>
<p>
En el trabajo, el ISFJ se motiva por el deseo de ayudar a otros de una manera práctica y organizada. Los ISFJ son impulsados por su núcleo de valores personales, que a menudo incluyen mantener la tradición, cuidar de los demás y trabajar duro.</p>

<p>Los ISFJ disfrutan del trabajo que requiere atención cuidadosa a los detalles y el cumplimiento de procedimientos establecidos, y les gusta ser eficientes y estructurados en la finalización de tareas. Prefieren una estructura de autoridad explícita y expectativas claras.</p>

<p>Los ISFJ generalmente prefieren trabajar detrás de escena y les gusta recibir reconocimiento de manera discreta sin tener que presentar su trabajo públicamente. Quieren sentir que han cumplido con sus deberes, pero no quieren ser arrojados al centro de atención.</p>

<p>Un trabajo ideal para un ISFJ implica tareas de trabajo bien definidas que logran un resultado concreto u observable y no requiere mucha multitarea. Un entorno de trabajo ideal para un ISFJ es ordenado, proporciona mucha privacidad e incluye colegas que comparten los valores del ISFJ.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/nurse.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/teacher.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/librarian.png" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ISFJ.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ISFJ';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/cap.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>