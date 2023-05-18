<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cssLogin.css">
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
session_start();

if(!isset($_POST["enviar"])){

 echo '<form action="../TFG/login.php" method="POST" class="datos">
<h2>Iniciar Sesion</h2>
<br>
<label>Email: </label>
<input type="text" name="email" placeholder="email" class="form-control" id="email">
<p id="errorEmail">ejemplo</p>
<br>
<label>Contraseña: </label>
<input type="password" name="contraseña" placeholder="contraseña" class="form-control">
<br>
<p>No tienes cuenta todavia? Registrate <a href="registro.php">aqui</a></p>
<input type="submit" name="enviar" value="Enviar" role="button" class="btn btn-primary" id="enviar">
</form>';

}else{

    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];
    $query = "SELECT * FROM registrarse WHERE email='$email' and contraseña=MD5('$contraseña')";
    $paquete = mysqli_query($conn,$query);
    $resultados = mysqli_num_rows($paquete);
    $queryNombre = "SELECT nombre FROM registrarse WHERE email='$email'";
    $paqueteNombre = mysqli_query($conn,$queryNombre);
    while($row=mysqli_fetch_row($paqueteNombre)){
        $_SESSION["nombre"] = $row[0];
        $_SESSION["nombre_unico"] = $row[0];
    }

    if($resultados == 1){
        header("Location: portada.php");
    }else{
        echo 'datos invalidos';
    }
}


?>
</div>
</div>

<script>
    var email = document.getElementById("email");
    var errorEmail = document.getElementById("errorEmail");
    var enviar = document.getElementById("enviar");

function validarEmail(palabra) {

try {
    if (palabra == "") {
        email.style.border = "1px solid grey";
        errorEmail.style.visibility = "hidden";
    }else if (palabra.length > 40) {
        email.style.border = "1px solid red";
        errorEmail.innerText = "Este campo no puede tener mas de 20 caracteres."
        errorEmail.style.visibility = "visible";
        errorEmail.style.color = "red";
        //Si hay algun caracter que no sea una letra dentro del valor del cargo
    }else if(!palabra.includes("@")){
        email.style.border = "1px solid red";
        errorEmail.innerText = "Es obligatorio poner un @."
        errorEmail.style.visibility = "visible";
        errorEmail.style.color = "red";
    }else if(palabra.substr(-4) != ".com"){
        email.style.border = "1px solid red";
        errorEmail.innerText = "Su correo debe terminar en .com."
        errorEmail.style.visibility = "visible";
        errorEmail.style.color = "red";
    }else {
        email.style.border = "1px solid green";
        errorEmail.style.visibility = "hidden";
    }
    
} catch (error) {
    console.log(error);
}
}

email.addEventListener("change", () => {

try {
    //Llamo a la funcion para validar el cargo con sus argumentos
    validarEmail(email.value);
} catch (error) {
    console.log(error);
}

if(errorEmail=="visible"){
    enviar.disabled=true;
}else{
    enviar.disabled=false;
}
});

</script>
</body>


</html>