<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/entp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ENTP</h1>
    <div class="ejemploentp">
        <div id="divEntp">
        <img src="../imgMbti/thomas-alva-edison-g47d9ff2b3_1920.jpg" alt="" id="imgentp">
        </div>
        <p class="quote">"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time."
            -Thomas Alva Edison
        </p>
    </div>
</div>

<div class="container">
<br>
<p>En el trabajo, el ENTP se preocupa por aplicar soluciones innovadoras a problemas desafiantes para mejorar la eficiencia y efectividad de los sistemas. Los ENTP a menudo adoptan un enfoque empresarial en su trabajo y prefieren abordar las tareas de manera informal y sin estructura, con pocas limitaciones a su ingenio.</p>

<p>Los ENTP valoran la competencia y a menudo quieren ser el experto. Disfrutan del trabajo que exige una mejora continua en su conocimiento y habilidades. Valoran el poder y desean una carrera que les permita tener contacto con personas influyentes y la oportunidad de aumentar su propia influencia.</p>

<p>Los ENTP son personas de ideas y se aburren fácilmente con la rutina. Se desaniman rápidamente cuando se les pide repetir una tarea o prestar atención a los detalles. Les va mejor cuando su trabajo es altamente conceptual y les permite resolver problemas de manera creativa sin tener que pensar en los detalles.</p>

<p>El entorno de trabajo ideal para un ENTP es intelectualmente desafiante sin ser rígido, con compañeros de trabajo creativos e inteligentes. El trabajo ideal para un ENTP les permite poner su creatividad a trabajar desarrollando ideas innovadoras, mientras les permite delegar la responsabilidad de los detalles tediosos de la implementación a otros.</p>

<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/marketing.png" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/engineer.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/journalist.jpg" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ENTP.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ENTP';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/joker.png" id="imgGuardar"> 
</div>
</div>
</body>

</html>