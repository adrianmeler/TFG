<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/intj.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link rel="stylesheet" href="../css/globalmbti.css">
</head>

<body>

<?php
    include("headerMbti.php");
    ?>
    <div class="portada">
    <h1>INTJ</h1>
    <div class="ejemplointj">
        <div id="divIntj">
        <img src="../imgMbti/elon-g45216b569_1920.jpg" alt="" id="imgintj">
        </div>
        <p class="quote">"When I was in college, I wanted to be involved in things that would change the world."
            -Elon Musk
        </p>
    </div>
</div>
<div class="container">
<br>
<p>
En el trabajo, el INTJ se destaca en la creación e implementación de soluciones innovadoras para problemas analíticos. Naturalmente ven posibilidades de mejora dentro de sistemas complejos y son organizados y determinados en la implementación de sus ideas para el cambio.</p>

<p>Los INTJs se sienten cómodos con la abstracción y la teoría, pero obtienen la mayor satisfacción al convertir sus ideas en realidad. A menudo disfrutan trabajando de forma independiente o en un pequeño equipo, tomando medidas estratégicas para implementar el cambio.</p>

<p>Los INTJs disfrutan trabajando con sistemas lógicos que pueden entender a fondo. Disfrutan del desafío de comprender ideas complejas y quieren entender cómo pueden mejorar la forma en que funcionan las cosas.</p>

<p>El entorno de trabajo ideal para un INTJ es lógico, eficiente, estructurado y analítico, con colegas competentes, inteligentes y productivos. El trabajo ideal para un Maestro les permite utilizar sus habilidades analíticas para resolver problemas en un entorno desafiante y asumir la responsabilidad de implementar sus ideas para crear sistemas eficientes e innovadores.</p>
<br>
<div class="row" id="carreras">
    <div class="col-lg-4"><img src="../imgMbti/it.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/researcher.jpg" alt=""></div>
    <div class="col-lg-4"><img src="../imgMbti/architect.jpg" alt=""></div>
</div>
    <br>
    <div id="guardarResultados">

<?php
include("../conexion.php");

if(!isset($_POST["guardar"])){

    echo '<form action="INTJ.php" method="POST">
    <p>Te damos la opcion de guardar tus resultados para que
    puedas consultarlos en otra ocasion en caso de que lo necesites</p>
    <br>
    <p>Quieres guardar tu resultado?</p>
    <br>
    <input type="submit" name="guardar" value="Guardar"
    <br>';

}else{

    echo '<p>Resultados guardados!</p>';
    $nombre = $_SESSION["nombre_unico"];
    $fecha = date("y/m/d");
    $resultado = "INTJ";
    $query = "INSERT INTO resultadosmbti(nombre,resultado,fecha) VALUES('$nombre','$resultado','$fecha')";
    $paquete = mysqli_query($conn,$query);
}

?>
<br>

<img src="../imgMbti/walter.jpg" id="imgGuardar"> 
</div>
</div>
</body>

</html>