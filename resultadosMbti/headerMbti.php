<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/1ae803e153.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/cssHeader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous">
    </script>
</head>

<body>

<header>
        <ul class="menu">
            <li id="inicio"> <a href="../portada.php">Inicio</a></li>
            <li id="myer"><a href="../mbti.php">Myer Briggs</a></li>
            <li id="eneagrama"><a href="../enneagram.php">Eneagrama</a></li>
            <li id="rasgos"><a href="../5rasgos.php">5 rasgos</a></li>
            <li id="myer"><input type=text name="busqueda" id="busqueda" placeholder="buscar"><button id="buscar"><i class="fa-solid fa-magnifying-glass"></i></button></li>
            <ul class="menu-desplegable">
                <li id="usuario" data-bs-toggle="collapse" data-bs-target="#submenu"><i class="fa-solid fa-user"></i>
            <?php
            include("../conexion.php");
            echo $_SESSION["nombre"];
            ?>
            </li>
                <div id="submenu" class="collapse">
                    <li><a href="../resultados.php">Tus resultados</a></li>
                    <hr>
                    <li><a href="../perfil.php">Perfil</a></li>
                    <hr>
                    <li id="cerrar" data-bs-toggle="collapse" data-bs-target="#mensaje">Cerrar sesion <i class="fa-solid fa-right-from-bracket"></i></li>
                    <hr>
                    <div id="mensaje" class="collapse">
                        <li>Seguro?</li>
                        <button id="salir">Salir</button>
                    </div>
                </div>
            </ul>
            <li id="buscador2"><input type=text name="busqueda" id="busqueda2" placeholder="buscar"><button id="buscar2"><i class="fa-solid fa-magnifying-glass"></i></button></li>
            <li id="barras" data-bs-toggle="collapse" data-bs-target="#menu2"><i class="fa-solid fa-bars"></i></li>
            <ul id="menu2-lista">
            <div id="menu2" class="collapse">
                <li id="inicio2"><a href="../portada.php">Inicio</a></li>
                <hr>
                <li id="myer2"><a href="../mbti.php">Myer Briggs</a></li>
                <hr>
                <li id="eneagrama2"><a href="../enneagram.php">Eneagrama</a></li>
                <hr>
                <li id="rasgos2"><a href="../5rasgos.php">5 rasgos</a></li>
                <hr>
                <div id="contenido-menu-desplegable2">
                    <li><a href="../resultados.php">Tus resultados</a></li>
                    <hr>
                    <li id="cerrar2"  data-bs-toggle="collapse" data-bs-target="#mensaje-2">Cerrar sesion <i class="fa-solid fa-right-from-bracket"></i></li>
                    <hr>
                    <ul>
                    <div id="mensaje-2"class="collapse">
                        <li>Seguro?</li>
                        <button id="salir2">Salir</button>
                    </div>
                    </ul>
                </div>
            </div>
        </ul> 
        </ul>
    </header>

    <script src="../js/headerMbti.js"></script>
</body>

</html>