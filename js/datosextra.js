var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var email = document.getElementById("email");
var contraseña = document.getElementById("contraseña");
let caracteresRaros = "!·$%&/()=?¿*^Ç_:;,.-ç+¡@#~~€¬";
let numeros = "0123456789";
let checkNombre = document.getElementById("checkNombre");
let checkApellido = document.getElementById("checkApellido");
let checkEmail = document.getElementById("checkEmail");
let xNombre = document.getElementById("xNombre");
let xApellido = document.getElementById("xApellido");
let xEmail = document.getElementById("xEmail");
let errorNombre = document.getElementById("errorNombre");
let errorApellido = document.getElementById("errorApellido");
let errorEmail = document.getElementById("errorEmail");
var enviar = document.getElementById("enviar");
let contadorCaracteresNombre = 0;
let contadorNumerosNombre = 0;
let contadorCaracteresApellido = 0;
let contadorNumerosApellido = 0;
let contadorCaracteresEmail = 0;
let contadorNumerosEmail = 0;
let incidenciaCaracteresNombre = 0;
let incidenciaNumerosNombre = 0;
let incidenciaCaracteresApellido = 0;
let incidenciaNumerosApellido = 0;
let incidenciaCaracteresEmail = 0;
let incidenciaNumerosEmail = 0;




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
function validarApellido(palabra, caracteres, numeros) {

    //Bucle while para recorrer el string de caracteres que no son letras
    //Si hay un caracter que no sea una letra el numero de incidencias aumenta
    try {
        while (contadorCaracteresApellido < caracteres.length) {
            if (palabra.includes(caracteres.charAt(contadorCaracteresApellido))) {
                incidenciaCaracteresApellido++;
            }
            contadorCaracteresApellido++;
        }
    } catch (error) {
        console.log(error);
    }

    //Bucle while para recorrer todos los numeros
    //Si hay algun numero en la palabra el numero de incidencias aumenta
    try {
        while (contadorNumerosApellido < numeros.length) {
            if (palabra.includes(numeros.charAt(contadorNumerosApellido))) {
                incidenciaNumerosApellido++;
            }
            contadorNumerosApellido++;
        }
    } catch (error) {
        console.log(error);
    }

    try {
        if (palabra.length > 14) {
            apellido.style.border = "1px solid red";
            errorApellido.innerText = "Este campo no puede tener mas de 14 caracteres."
            errorApellido.style.visibility = "visible";
            errorApellido.style.color = "red";
            //Si hay un caracter que no sea una letra dentro del campo empresa
        } else if (incidenciaCaracteresApellido >= 1) {
            //Reduzco la incidencia de caracteres que no sean letras a cero
            incidenciaCaracteresApellido--;
            apellido.style.border = "1px solid red";
            errorApellido.innerText = "Este campo no puede tener caracteres que no sean letras."
            errorApellido.style.visibility = "visible";
            errorApellido.style.color = "red";
            //Si hay numeros dentro del campo empresa
        } else if (incidenciaNumerosApellido >= 1) {
            //Reduzco la incidencia de los numeros en el campo empresa a cero
            incidenciaNumerosApellido--;
            apellido.style.border = "1px solid red";
            errorApellido.innerText = "Este campo no puede tener numeros."
            errorApellido.style.visibility = "visible";
            errorApellido.style.color = "red";
        } else if (palabra == "") {
            apellido.style.border = "1px solid grey";
            errorApellido.style.visibility = "hidden";
        } else {
            apellido.style.border = "1px solid green";
            errorApellido.style.visibility = "hidden";
        }
    } catch (error) {
        console.log(error);
    }
    //Tengo que reducir los contadores para los bucles a cero para poder volver a empezar
    contadorNumerosApellido -= numeros.length;
    contadorCaracteresApellido -= caracteres.length;
}

//Creo funcion para validar el campo cargo y le pongo como parametros la palabra. caracteres que no sean letras y numeros
function validarEmail(palabra, caracteres, numeros) {

    //Bucle while para recorrer el string de caracteres que no son letras
    //Si hay un caracter que no sea una letra el numero de incidencias aumenta
    try {
        while (contadorCaracteresEmail < caracteres.length) {
            if (palabra.includes(caracteres.charAt(contadorCaracteresEmail))) {
                incidenciaCaracteresEmail++;
            }
            contadorCaracteresEmail++;
        }
    } catch (error) {
        console.log(error);
    }

    //Bucle while para recorrer todos los numeros
    //Si hay algun numero en la palabra el numero de incidencias aumenta

    try {
        if (palabra.length > 14) {
            email.style.border = "1px solid red";
            errorEmail.innerText = "Este campo no puede tener mas de 14 caracteres."
            errorEmail.style.visibility = "visible";
            errorEmail.style.color = "red";
            //Si hay algun caracter que no sea una letra dentro del valor del cargo
        } else if (incidenciaCaracteresEmail >= 1) {
            //Reduzco la incidencia de los caracteres raros a cero
            incidenciaCaracteresEmail--;
            email.style.border = "1px solid red";
            errorEmail.innerText = "Este campo no puede tener caracteres que no sean letras."
            errorEmail.style.visibility = "visible";
            errorEmail.style.color = "red";
            //Si hay algun numero dentro del campo cargo
        }else if (palabra == "") {
            email.style.border = "1px solid grey";
            errorEmail.style.visibility = "hidden";
        }else if(!palabra.includes("@")){
            email.style.border = "1px solid red";
            errorEmail.innerText = "Es obligatorio poner un @."
            errorEmail.style.visibility = "visible";
            errorEmail.style.color = "red";
        }else if(!palabra.substr(palabra.length -4) == ".com"){
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
    //Tengo que reducir los contadores para los bucles a cero para poder volver a empezar
    contadorCaracteresEmail -= caracteres.length;
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
apellido.addEventListener("change", () => {

    //Reviso que la longitud del valor del campo de empresa no sea mayor a 14 caracteres
    try {
        //Llamo a la funcion para validar la empresa con sus argumentos
        validarApellido(apellido.value, caracteresRaros, numeros);
    } catch (error) {
        console.log(error);
    }

    if(errorNombre.style.visibility=="visible" || errorApellido.style.visibility=="visible" || errorEmail=="visible"){
        enviar.disabled=true;
    }else{
        enviar.disabled=false;
    }
});

//Evento de "change" para que el valor de la casilla cargo de pueda visualizar en la tarjeta de previsualizacion
email.addEventListener("change", () => {

    try {
        //Llamo a la funcion para validar el cargo con sus argumentos
        validarEmail(email.value, caracteresRaros, numeros);
    } catch (error) {
        console.log(error);
    }

    if(errorNombre.style.visibility=="visible" || errorApellido.style.visibility=="visible" || errorEmail=="visible"){
        enviar.disabled=true;
    }else{
        enviar.disabled=false;
    }
});
