<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/istp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
?>

<div class="portada">
    <h1>ISTP</h1>
    <div class="ejemploistp">
        <div id="divIstp">
        <img src="../imgMbti/jordan.png" alt="" id="imgistp">
        </div>
        <p class="quote">"Politicians have to be committed to people in equal measures."
            -Angela Merkel
        </p>
    </div>
</div>
<div class="container">
<br>
<p>En el trabajo, el ISTP está motivado por el deseo de alcanzar y utilizar la experiencia técnica. Los ISTP disfrutan dominando y manipulando las herramientas de su oficio, ya sea las tradicionales martillos y sierras, o las herramientas más modernas de negocios o tecnología.</p>

<p>Los ISTP prefieren tareas con un resultado tangible, y típicamente se sienten más satisfechos cuando han construido algo concreto. Disfrutan solucionando problemas y a menudo buscan ocupaciones que les permitan aplicar sus habilidades para resolver problemas prácticos.</p>

<p>Muchos ISTP disfrutan de ocupaciones que implican actividad física, a menudo con un aspecto de riesgo o peligro, y no les gusta estar atados a un escritorio. Suelen estar más energizados por la acción, y quieren saltar para hacer las cosas en lugar de pasar mucho tiempo planeando o teorizando.</p>

<p>Los ISTP valoran la eficiencia y la lógica, y quieren flexibilidad en su trabajo. Prefieren un trabajo donde puedan ser prácticos y orientados a la acción sin estar demasiado cargados con reglas, procedimientos o burocracia.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/software.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/quality.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/proyect.jpg" alt=""></div>
</div>
<br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ISTP.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ISTP';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/hawkeye.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>