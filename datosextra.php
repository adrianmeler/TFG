<?php
include('header.php');
include('conexion.php');
?>

<html>

<head>
    <title>

    </title>

    <style>
        .contenido{
            display:flex;
            justify-content: center;
        }

        .contenido .divContenido{
            border:1px solid black;
            height:650px;
            width:400px;
            display:flex;
            justify-content:center;
        }

        .contenido form{
            margin-top: 10px;
        }

        #españa{
            display:none;
        }

        #venezuela{
            display:none;
        }

        #errorNombre{
            visibility:hidden;
        }

        #errorTelefono{
            visibility:hidden;
        }

        #errorEmail{
            visibility:hidden;
        }

        #boton{
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>

<body>

<div class='contenido'>
    <div class="divContenido">
<?php

if(!isset($_POST['enviar']) && (!isset($_FILES['imagen']))){

    echo "
    <form action='datosextra.php' method='POST' enctype='multipart/form-data'>
    <label>Nombre:</label>
    <input type='text' name='nombre' placeholder='nombre' id='nombre'>
    <p id='errorNombre'>ejemplo</p>
    <br>
    <br>
    <label>Telefono:</label>
    <input type='text' name='telefono' placeholder='telefono' id='telefono'>
    <p id='errorTelefono'>ejemplo</p>
    <br>
    <br>
    <label>Correo electronico:</label>
    <input type='text' name='email' placeholder='correo electronico' id='email'>
    <p id='errorEmail'>ejemplo</p>
    <br>
    <br>
    <label>Pais:</label>
    <select name='paises' id='paises'>
    <option>--Elija pais--</option>
    <option value='España'>España</option>
    <option value='Venezuela'>Venezuela</option>
    </select>
    <br>
    <br>
    <label>Ciudad:</label>
    <select name='provinciaEspaña' id='españa'>
    <option>--Elija provincia--</option>
    <option value='Albacete'>Albacete</option>
    <option value='Alicante'>Alicante</option>
    <option value='Almeria'>Almeria</option>
    <option value='Badajoz'>Badajoz</option>
    <option value='Burgos'>Burgos</option>
    <option value='Cantabria'>Albacete</option>
    <option value='Granada'>Granada</option>
    <option value='Huelva'>Huelva</option>
    <option value='Jaén'>Jaén</option>
    <option value='Lugo'>Lugo</option>
    <option value='Madrid'>Madrid</option>
    <option value='Navarra'>Navarra</option>
    <option value='Orense'>Orense</option>
    <option value='Palencia'>Palencia</option>
    <option value='Salamanca'>Salamanca</option>
    <option value='Toledo'>Toledo</option>
    <option value='Valencia'>Valencia</option>
    <option value='Valladolid'>Valladolid</option>
    </select>
    <br>
    <br>
    <select name='ciudadVenezuela' id='venezuela'>
    <option>--Elija ciudad--</option>
    <option value='Acarigua'>Acarigua</option>
    <option value='Barcelona'>Barcelona</option>
    <option value='Caracas'>Caracas</option>
    <option value='Cabimas'>Cabimas</option>
    <option value='Coro'>Coro</option>
    <option value='Cumaná'>Cumaná</option>
    <option value='Guanare'>Guanare</option>
    <option value='Maracaibo'>Maracaibo</option>
    <option value='Maracay'>Maracay</option>
    <option value='Maturin'>Maturin</option>
    <option value='Merida'>Merida</option>
    <option value='Trujillo'>Trujillo</option>
    <option value='Tucupita'>Tucupita</option>
    <option value='Valencia'>Valencia</option>
    <option value='Valera'>Valera</option>
    </select>
    <br>
    <br>
    <label>Imagen: </label>
    <input type='file' name='imagen'>
    <br>
    <br>
    <div id='boton'>
    <input type='submit' name='enviar' value='guardar' id='enviar' class='btn btn-primary'>
    </div>
    </form>";
}else{
    $nombreSesion = $_SESSION['nombre'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email'];
    $pais = $_POST['paises'];
    $provincia = $_POST['provinciaEspaña'];
    $ciudad = $_POST['ciudadVenezuela'];
    $imagen = $_FILES['imagen']['name'];

    $_SESSION['nombre'] = str_replace($_SESSION['nombre'],$nombre,$_SESSION['nombre']);

    $query = "UPDATE registrarse SET nombre='$nombre',email='$correo',imagen='$imagen' WHERE nombre='$nombreSesion'";
    $paquete = mysqli_query($conn,$query);

    if($paquete){
        move_uploaded_file($_FILES['imagen']['tmp_name'],$imagen);
    }

    if($pais == 'España'){
        $query2 = "UPDATE datosadicionales SET nombre='$nombre',numero='$telefono',pais='$pais',ciudad='$provincia' WHERE nombre='$nombreSesion'";
        $paquete2 = mysqli_query($conn,$query2);
    }else if($pais == 'Venezuela'){
        $query2 = "UPDATE datosadicionales SET nombre='$nombre',numero='$telefono',pais='$pais',ciudad='$ciudad' WHERE nombre='$nombreSesion'";
        $paquete2 = mysqli_query($conn,$query2);
    }

    echo "<script>window.location.href='perfil.php'</script>";
    

} 

?>
</div>
</div>

<script>
    let paises = document.getElementById("paises");
    let españa = document.getElementById("españa");
    let venezuela = document.getElementById("venezuela");
    var nombre = document.getElementById("nombre");
var telefono = document.getElementById("telefono");
var email = document.getElementById("email");
let caracteresRaros = "!·$%&/()=?¿*^Ç_:;,.-ç+¡@#~~€¬";
let numeros = "0123456789";
let letras = "qwertyuiopñlkjhgfdsazxcvbnm";
let errorNombre = document.getElementById("errorNombre");
let errortelefono = document.getElementById("errortelefono");
let errorEmail = document.getElementById("errorEmail");
var enviar = document.getElementById("enviar");
let contadorCaracteresNombre = 0;
let contadorNumerosNombre = 0;
let contadorCaracteresTelefono = 0;
let contadorLetrasTelefono = 0;
let incidenciaCaracteresNombre = 0;
let incidenciaNumerosNombre = 0;
let incidenciaCaracteresTelefono = 0;
let incidenciaLetrasTelefono = 0;
var enviar = document.getElementById("enviar");

    paises.addEventListener("change", () =>{
        if(paises.value == 'España'){
            españa.style.display = "block";
        }else if(paises.value == 'Venezuela'){
            venezuela.style.display = "block";
        }
    })



function validarNombre(palabra, caracteres, numeros) {

    //Bucle while para recorrer el string de caracteres que no son letras
    //Si hay un caracter que no sea una letra el numero de incidencias aumenta
    try {
        while (contadorCaracteresNombre < caracteres.length) {
            if (palabra.includes(caracteres.charAt(contadorCaracteresNombre))) {
                incidenciaCaracteresNombre++;
            }
            contadorCaracteresNombre++;
        }
    } catch (error) {
        console.log(error);
    }

    //Bucle while para recorrer todos los numeros
    //Si hay algun numero en la palabra el numero de incidencias aumenta
    try {
        while (contadorNumerosNombre < numeros.length) {
            if (palabra.includes(numeros.charAt(contadorNumerosNombre))) {
                incidenciaNumerosNombre++;
            }
            contadorNumerosNombre++;
        }
    } catch (error) {
        console.log(error);
    }

    try {
        if (palabra.length > 14) {
            nombre.style.border = "1px solid red";
            errorNombre.innerText = "Este campo no puede tener mas de 14 caracteres."
            errorNombre.style.visibility = "visible";
            errorNombre.style.color = "red";
            //Si hay un caracter que no sea una letra
        } else if (incidenciaCaracteresNombre >= 1) {
            //Reduzco la incidencia de los caracteres que no son letras a 0 para empezar de nuevo
            incidenciaCaracteresNombre--;
            nombre.style.border = "1px solid red";
            errorNombre.innerText = "Este campo no puede tener caracteres que no sean letras."
            errorNombre.style.visibility = "visible";
            errorNombre.style.color = "red";
            //Si hay algun numero en la alabra 
        } else if (incidenciaNumerosNombre >= 1) {
            //Reduzco el numero de incidencias de numeros a cero
            incidenciaNumerosNombre--;
            nombre.style.border = "1px solid red";
            errorNombre.innerText = "Este campo no puede tener numeros."
            errorNombre.style.visibility = "visible";
            errorNombre.style.color = "red";
        } else if (palabra == "") {
            nombre.style.border = "1px solid grey";
            errorNombre.style.visibility = "hidden";
        } else {
            nombre.style.border = "1px solid green";
            errorNombre.style.visibility = "hidden";
        }
    } catch (error) {
        console.log(error);
    }

    //Tengo que reducir los contadores para los bucles a cero para poder volver a empezar
    contadorNumerosNombre -= numeros.length;
    contadorCaracteresNombre -= caracteres.length;
}

//Creo una funcion para validar el campo de empresa y como parametros le paso
//la palabra a validar, los caracteres raros y los numeros
function validarTelefono(palabra, caracteres,letras) {

    //Bucle while para recorrer el string de caracteres que no son letras
    //Si hay un caracter que no sea una letra el numero de incidencias aumenta
    try {
        while (contadorCaracteresTelefono < caracteres.length) {
            if (palabra.includes(caracteres.charAt(contadorCaracteresTelefono))) {
                incidenciaCaracteresTelefono++;
            }
            contadorCaracteresTelefono++;
        }
    } catch (error) {
        console.log(error);
    }

    try {
        while (contadorLetrasTelefono < letras.length) {
            if (palabra.includes(letras.charAt(contadorLetrasTelefono))) {
                incidenciaLetrasTelefono++;
            }
            contadorLetrasTelefono++;
        }
    } catch (error) {
        console.log(error);
    }

    try {
        if (palabra == "") {
            telefono.style.border = "1px solid grey";
            errorTelefono.style.visibility = "hidden";
        }else if (palabra.length >9) {
            telefono.style.border = "1px solid red";
            errorTelefono.innerText = "Este campo no puede tener mas de 9 caracteres."
            errorTelefono.style.visibility = "visible";
            errorTelefono.style.color = "red";
            //Si hay un caracter que no sea una letra dentro del campo empresa
        }else if (palabra.length < 9) {
            telefono.style.border = "1px solid red";
            errorTelefono.innerText = "Este campo no puede tener menos de 9 caracteres."
            errorTelefono.style.visibility = "visible";
            errorTelefono.style.color = "red";
        }else if (incidenciaCaracteresTelefono >= 1) {
            //Reduzco la incidencia de caracteres que no sean letras a cero
            incidenciaCaracteresTelefono--;
            telefono.style.border = "1px solid red";
            errorTelefono.innerText = "Este campo no puede tener caracteres."
            errorTelefono.style.visibility = "visible";
            errorTelefono.style.color = "red";
            //Si hay numeros dentro del campo empresa
        }else if (incidenciaLetrasTelefono >= 1) {
            //Reduzco la incidencia de caracteres que no sean letras a cero
            incidenciaLetrasTelefono--;
            telefono.style.border = "1px solid red";
            errorTelefono.innerText = "Este campo no puede tener letras."
            errorTelefono.style.visibility = "visible";
            errorTelefono.style.color = "red";
            //Si hay numeros dentro del campo empresa
        } else {
            telefono.style.border = "1px solid green";
            errorTelefono.style.visibility = "hidden";
        }
    } catch (error) {
        console.log(error);
    }
    //Tengo que reducir los contadores para los bucles a cero para poder volver a empezar
    contadorCaracteresTelefono -= caracteres.length;
    contadorLetrasTelefono -= letras.length;
}

//Creo funcion para validar el campo cargo y le pongo como parametros la palabra. caracteres que no sean letras y numeros
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

//se puedan visualizar en la tarjeta de previsualizacion 
nombre.addEventListener("change", () => {

    try {
        //LLamo a la funcion para validar el nombre con sus argumentos
        validarNombre(nombre.value, caracteresRaros, numeros);

    } catch (error) {
        console.log(error);
    }

    if(errorNombre.style.visibility=="visible" || errorApellido.style.visibility=="visible" || errorEmail=="visible"){
        enviar.disabled=true;
    }else{
        enviar.disabled=false;
    }
});

//Evento "change" para el campo de la empresa
telefono.addEventListener("change", () => {

    //Reviso que la longitud del valor del campo de empresa no sea mayor a 14 caracteres
    try {
        //Llamo a la funcion para validar la empresa con sus argumentos
        validarTelefono(telefono.value, caracteresRaros,letras);
    } catch (error) {
        console.log(error);
    }

    if(errorNombre.style.visibility=="visible" || errorTelefono.style.visibility=="visible" || errorEmail=="visible"){
        enviar.disabled=true;
    }else{
        enviar.disabled=false;
    }
});

//Evento de "change" para que el valor de la casilla cargo de pueda visualizar en la tarjeta de previsualizacion
email.addEventListener("change", () => {

    try {
        //Llamo a la funcion para validar el cargo con sus argumentos
        validarEmail(email.value);
    } catch (error) {
        console.log(error);
    }

    if(errorNombre.style.visibility=="visible" || errorTelefono.style.visibility=="visible" || errorEmail=="visible"){
        enviar.disabled=true;
    }else{
        enviar.disabled=false;
    }
});

</script>
</body>
</html>