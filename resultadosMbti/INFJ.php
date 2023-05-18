<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/infj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>INFJ</h1>
    <div class="ejemploinfj">
        <div id="divInfj">
        <img src="../imgMbti/martin-luther-king-ge727a9129_1920.jpg" alt="" id="imginfj">
        </div>
        <p class="quote">"I have a dream that my four little children will one day live in a nation where they will not be judged by the color of their skin, but by the content of their character."
            -Martin Luther King
        </p>
    </div>
</div>
<div class="container">
<br>
<p>En el trabajo, el INFJ se enfoca en la tarea de mejorar la condición humana. Los INFJ son trabajadores dedicados, serviciales y con principios en los que se puede confiar para concebir, planificar y llevar a cabo proyectos complejos para causas humanitarias.</p>

<p>Aunque típicamente están impulsados ​​por ideales elevados, los Consejeros obtienen la mayor satisfacción de su trabajo cuando pueden convertir sus ideas en realidad, creando un cambio constructivo para otras personas.</p>

<p>Los INFJ suelen ser organizados y prefieren trabajar en entornos que les permitan completar proyectos de manera ordenada. A menudo son independientes y tienden a preferir un ambiente tranquilo que les brinde la oportunidad de desarrollar plenamente sus propios pensamientos e ideas. Un INFJ puede ser un poco descuidado con los detalles y, a veces, requerir la ayuda de un compañero de trabajo más meticuloso para asegurarse de no olvidar nada. Pero compensan esta tendencia con su intensa dedicación a la tarea en cuestión y su compromiso de hacer su mejor trabajo.</p>

<p>El entorno laboral ideal para un INFJ es armonioso, trabajador y orientado a una misión humanitaria, con compañeros de trabajo que estén igualmente comprometidos con el cambio positivo. Los INFJ están orientados al equipo y esperan que los logros y las realizaciones sean reconocidos y apreciados, incluyendo los suyos. No les va bien en entornos altamente competitivos, "sobrevivencia del más apto", donde las personas compiten por el poder o el prestigio. En su lugar, prefieren un lugar de trabajo que priorice la cooperación.</p>

<p>El trabajo ideal para un Consejero les permite utilizar su creatividad en un entorno independiente y organizado para desarrollar e implementar una visión que sea consistente con sus valores personales. Siempre y cuando su trabajo les brinde satisfacción y contribuya al bien mayor, cosas como el estatus y el salario seguirán siendo secundarios para los INFJ. No rechazarán las promociones, pero su principal motivación es su deseo de servir a los demás. Por esta razón, muchos INFJ buscan puestos como consejeros, educadores, trabajadores de servicios sociales, terapeutas y entrenadores. Estos trabajos les brindan amplias oportunidades para ofrecer consejos e instrucciones a aquellos que necesitan una asistencia inteligente y compasiva.</p>

<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/psychologist.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/writer.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/researcher.jpg" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="INFJ.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'INFJ';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/jon.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>