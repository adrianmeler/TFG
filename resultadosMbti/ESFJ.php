<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/esfj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ESFJ</h1>
    <div class="ejemploesfj">
        <div id="divEsfj">
        <img src="../imgMbti/bill-clinton-g6a9b951b1_1920.jpg" alt="" id="imgesfj">
        </div>
        <p class="quote">"If you live long enough, you'll make mistakes. But if you learn from them, you'll be a better person. It's how you handle adversity, not how it affects you. The main thing is never quit, never quit, never quit."
            -Bill Clinton
        </p>
    </div>
</div>

<div class="container">
<br>
<p>A los ESFJ les gusta poner sus habilidades interpersonales a trabajar para organizar a las personas y los procesos. Están sintonizados con las necesidades de los demás y buscan crear estructuras para proveer a las personas. A menudo, los ESFJ prefieren trabajos que les permitan ayudar a las personas de manera práctica y observable.</p>

<p>Los ESFJ disfrutan del trabajo que les permite ver resultados al seguir un proceso y prefieren un alto grado de estructura y organización. Obtienen satisfacción al completar tareas con atención al orden y al detalle. Un trabajo ideal para un ESFJ requiere atención al procedimiento y las especificaciones, y les permite trabajar de manera metódica para organizar a las personas y los procesos.</p>

<p>Por lo general, los ESFJ prefieren trabajar con otros y se sienten energizados al participar en un equipo motivado, consciente y orientado a la acción. Es importante para el ESFJ realizar un trabajo que esté de acuerdo con sus valores, así como trabajar con otros que sean solidarios y cooperativos. Un entorno laboral ideal para un ESFJ proporciona expectativas claras y un ambiente amistoso y estructurado sin conflictos ni incertidumbre.</p>

<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/customer.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/social.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/event.jpg" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ESFJ.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ESFJ';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/dean.png" id="imgGuardar"> 
</div>
</div>
</body>

</html>