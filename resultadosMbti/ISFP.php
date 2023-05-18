<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/isfp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>
<?php
    include("headerMbti.php");
    ?>

<div class="portada">
    <h1>ISFP</h1>
    <div class="ejemploisfp">
        <div id="divIsfp">
        <img src="../imgMbti/jackson.jpg" alt="" id="imfisfp">
        </div>
        <p class="quote">"Grief is the price we pay for love."
            -Elizabeth II
        </p>
    </div>
</div>
<div class="container">
<br>
<p>Los ISFPs quieren sentirse personalmente comprometidos con su trabajo y buscan carreras que les permitan expresarse o participar en una causa en la que creen. Por lo general, disfrutan de actividades prácticas y a menudo obtienen satisfacción cuando pueden crear un resultado tangible a partir de sus esfuerzos. Un trabajo ideal para un ISFP les permite observar claramente los frutos de su trabajo, en un contexto que se siente significativo y consistente con sus valores.</p>

<p>A los ISFPs les gusta un entorno de trabajo cortés y cooperativo donde puedan trabajar en silencio, con apoyo cuando lo necesiten. Debido a que los ISFPs están tan sintonizados con su entorno físico, a menudo es importante para ellos que su entorno de trabajo sea estéticamente agradable.</p>

<p>Por lo general, los ISFPs prefieren mantener un perfil bajo y no suelen gustarles las posiciones que requieren que hablen en público o lideren grandes grupos. Aunque a menudo prefieren trabajar de manera independiente, cuando trabajan con otros, los ISFPs quieren que sus colegas sean flexibles, solidarios y leales al equipo.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/chef.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/vet.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/social.jpg" alt=""></div>
</div>
<br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ISFP.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ISFP';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/jesse.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>