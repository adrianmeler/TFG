<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/esfp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
        <div class="portada">
    <h1>ESFP</h1>
    <div class="ejemploesfp">
        <div id="divEsfp">
            <img src="../imgMbti/monroe.jpg" alt="" id="imgesfp">
        </div>
        <p class="quote">  "Imperfection is beauty, madness is genius and it's better to be absolutely ridiculous than absolutely boring."
            -Marylin Monroe
        </p>
    </div>
</div>
   <br>

   <div class="container">
<br>
<p>En el trabajo, el ESFP quiere estar involucrado y en el centro de la acción. Los ESFP prefieren un ambiente de trabajo activo y social donde puedan ser espontáneos y divertirse, con compañeros de trabajo amistosos, relajados y entusiastas.</p>

<p>Los ESFP son pragmáticos, realistas y están sintonizados con las necesidades de los demás. A menudo eligen un trabajo que les permita servir a las personas y ver resultados tangibles por sus esfuerzos. Son talentosos para resolver problemas prácticos centrados en las personas, y pueden poner esta habilidad en buen uso al ayudar a otros.</p>

<p>Los ESFP están muy sintonizados con sus sentidos y a menudo tienen un toque artístico. Pueden elegir carreras que involucren su naturaleza sensual a través de la comida, los textiles, el arte o la música. Los ESFP a menudo quieren una carrera que les permita moverse y generalmente prefieren un ambiente de trabajo que sea estéticamente atractivo.</p>

<p>Los ESFP se estresan con reglas estrictas o burocracia excesiva en el trabajo, y quieren la flexibilidad para abordar situaciones a medida que surgen. Por lo general, se centran en las demandas del momento presente y no les gusta trabajar en proyectos a largo plazo, prefiriendo trabajos que tengan resultados inmediatos y tangibles.</p>
<br>

<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/sales.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/realstate.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/travel.jpg" alt=""></div>
</div>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ESFP.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ESFP';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/dandelion.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>