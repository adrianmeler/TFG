<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>ESTJ</h1>
    <div class="ejemploestj">
        <div id="divEstj">
        <img src="../imgMbti/judge-ge87ffdef9_1920.jpg" alt="" id="imgestj">
        </div>
        <p class="quote"> “I do know one thing about me: I don't measure myself by others' expectations or let others define my worth.” 
            -Sonia Sotomayor
        </p>
    </div>
</div>
<div class="container">
<br>
<p>En el trabajo, el ESTJ sobresale en la organización, ya sea de personas, proyectos o operaciones. A los ESTJs les gusta tener el control y a menudo buscan puestos de gestión, prefiriendo estar en un rol donde puedan tomar decisiones y hacer cumplir políticas y procedimientos.</p>

<p>Los ESTJs desarrollan rápidamente una reputación en el lugar de trabajo como personas en las que se puede confiar para entregar, a tiempo y según lo solicitado. Son confiables sin falla y obtienen satisfacción al llevar un proyecto a su finalización. Debido a su disposición para asumir responsabilidades, a veces se sobrecargan de trabajo.</p>

<p>El ambiente de trabajo ideal para un ESTJ es altamente estructurado, con un conjunto claro de expectativas y una estructura de autoridad organizada. El trabajo ideal para un ESTJ les permite utilizar sus habilidades organizativas dentro de un conjunto de procedimientos estandarizados para producir eficientemente un producto tangible.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/financial.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/proyect.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/accountant.jpg" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="ESTJ.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $resultado = 'ESTJ';
    $fecha = date("y/m/d");
    $nombre = $_SESSION["nombre_unico"];
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/boromir.png" id="imgGuardar"> 
</div>
</div>
</body>

</html>