<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cssRegistro.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1ae803e153.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <ul class="menu">
            <a href="index.php"><li>Descubre tu profesion</li></a>
            <a href="login.php"><li>Sign up</li></a>
        </ul>
    </header>

    <div class="login">
<div class="form">
<?php
include("conexion.php");

if(!isset($_POST["enviar"])){

 echo '<form action="../TFG/registro.php" method="POST" class="datos">
<h2>Registrate</h2>
<label>Nombre</label>
<input type="text" name="nombre" placeholder="nombre" class="form-control" id="nombre">
<p id="errorNombre">error</p>
<br>
<label>Apellido: </label>
<input type="text" name="apellido" placeholder="apellido" class="form-control" id="apellido">
<p id="errorApellido">error</p>
<br>
<label>Email: </label>
<input type="text" name="email" placeholder="email" class="form-control" id="email">
<p id="errorEmail">error</p>
<br>
<label>Contraseña: </label>
<input type="password" name="contraseña" placeholder="contraseña" class="form-control" id="contraseña">
<br>
<p>Ya tienes cuenta? Inicia sesion <a href="login.php">aqui</a></p>
<input type="submit" name="enviar" value="Enviar" role="button" class="btn btn-primary" id="enviar">
</form>';

}else{

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];
    $imagen = "";
    $nombre_unico = $_POST["nombre"];
    $query = "INSERT INTO registrarse (nombre,apellido,email,contraseña,imagen,nombre_unico) VALUES('$nombre','$apellido','$email', MD5('$contraseña'),'$imagen','$nombre_unico')";
    $paquete = mysqli_query($conn,$query);
    $query2 = "INSERT INTO datosadicionales(nombre,numero,pais,ciudad) VALUES('$nombre','','','')";
    $paquete2 = mysqli_query($conn,$query2);
    header("Location: login.php");
   
}


?>
</div>
</div>


<script src="js/registro.js"></script>
</body>


</html>