<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estp.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
       <div class="portada">
    <h1>ESTP</h1>
    <div class="ejemploestp">
        <div id="divEstp">
        <img src="../imgMbti/samuel.jpg" alt="" id="imgestp">
        </div>
        <p class="quote"> “I do know one thing about me: I don't measure myself by others' expectations or let others define my worth.” 
            -Sonia Sotomayor
        </p>
    </div>
</div>
    <div class="container">
<br>
<p>En el trabajo, el ESTP está motivado para resolver problemas lógicos en el momento. Los ESTPs tienen una sólida comprensión de las realidades concretas de una situación y un buen sentido de los recursos a su disposición. Debido a que comprenden los hechos del presente, a menudo pueden encontrar rápidamente una solución a situaciones difíciles.</p>

<p>El ESTP se basa en la experiencia pasada para elegir el mejor enfoque para la situación actual. Los ESTPs son concretos y prácticos, y tienen un sentido cinético de cómo funcionan las cosas. Aunque pueden tener dificultades para visualizar ideas abstractas, son flexibles en su enfoque: si algo suena lógico, generalmente están dispuestos a intentarlo.</p>

<p>Los ESTPs a menudo eligen carreras que aprovechan su habilidad atlética, sus habilidades mecánicas o su capacidad para negociar su entorno físico. Tienden a preferir objetos a ideas y a menudo les gusta un producto tangible. Pueden tener problemas para quedarse quietos y a menudo evitan estar atrapados detrás de un escritorio.</p>

<p>Los ESTPs prefieren un trabajo que sea un poco impredecible y que les ofrezca diversión y aventura durante todo el día laboral. Quieren un trabajo que les brinde mucha flexibilidad para resolver problemas sobre la marcha, sin presión para seguir procedimientos o planes establecidos.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/sales.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/mechanic.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/entertainer.jpg" alt=""></div>
</div>
    <br>


    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ESTP.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ESTP';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/antman.jpg" id="imgGuardar"> 
</div>
</div>

</body>

</html>