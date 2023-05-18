<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/istj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ISTJ</h1>
    <div class="ejemploistj">
        <div id="divIstj">
        <img src="../imgMbti/angela-merkel-g5b682955d_1920.jpg" alt="" id="imgistj">
        </div>
        <p class="quote">"Politicians have to be committed to people in equal measures."
            -Angela Merkel
        </p>
    </div>
</div>
<div class="container">
<br>
<p>En el trabajo, los ISTJ son confiables y meticulosos. Los ISTJ toman muy en serio los plazos y las especificaciones, y trabajan de manera independiente y sistemática para completar las tareas que se les asignan. Los ISTJ valoran un entorno de trabajo estable con expectativas claras y pocas sorpresas. Están en su mejor momento cuando pueden crear planes de acción detallados y seguirlos con poca desviación.</p>

<p>Aunque a los ISTJ les gusta hacer bastante trabajo de manera independiente, a menudo aprecian el valor de participar en un equipo también, especialmente si sus colegas son razonables y profesionales y hay una clara jerarquía para que sepan quién está a cargo.</p>

<p>Un trabajo ideal para un ISTJ les permite resolver problemas lógicos de manera ordenada. Un entorno de trabajo ideal para un ISTJ es tranquilo, organizado y estructurado, con reglas y regulaciones bien establecidas y claramente adheridas por todos.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/financial.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/dataanalyst.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/technical.jpg" alt=""></div>
</div
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ISTJ.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ISTJ';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/hermione.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>