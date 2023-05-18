let icono = document.getElementById("usuario");
let botones = document.getElementById("botones");
let salir = document.getElementById("salir");
let salir2 = document.getElementById("salir2");
let busqueda = document.getElementById("busqueda");
let busqueda2 = document.getElementById("busqueda2");
let buscar = document.getElementById("buscar");
let buscar2 = document.getElementById("buscar2");
let mensaje = document.getElementById("mensaje");
//let barras = document.getElementById("barras");
//let menu2 = document.getElementById("menu-desplegable2");


/*barras.addEventListener("click",() =>{
    menu2.style.display = "block";
})*/



cerrar.addEventListener("click", function(){
    
    if (mensaje.style.display === 'none') {
        mensaje.style.display = "block";
        //icono.style = "margin-left:80%";

    } else {
        mensaje.style.display = "none";
        //icono.style = "margin-right:15%";
    }
})


buscar.addEventListener("click",() =>{

    if(busqueda.value == "enfj"){
        window.location.assign("../TFG/resultadosMbti/ENFJ.php");
    }else if(busqueda.value == "enfp"){
        window.location.assign("../TFG/resultadosMbti/ENFP.php");
    }else if(busqueda.value == "entj"){
        window.location.assign("../TFG/resultadosMbti/ENTJ.php");
    }else if(busqueda.value == "entp"){
        window.location.assign("../TFG/resultadosMbti/ENTP.php");
    }else if(busqueda.value == "esfj"){
        window.location.assign("../TFG/resultadosMbti/ESFJ.php");
    }else if(busqueda.value == "esfp"){
        window.location.assign("../TFG/resultadosMbti/ESFP.php");
    }else if(busqueda.value == "estj"){
        window.location.assign("../TFG/resultadosMbti/ESTJ.php");
    }else if(busqueda.value == "estp"){
        window.location.assign("../TFG/resultadosMbti/ESTP.php");
    }else if(busqueda.value == "infj"){
        window.location.assign("../TFG/resultadosMbti/INFJ.php");
    }else if(busqueda.value == "infp"){
        window.location.assign("../TFG/resultadosMbti/INFP.php");
    }else if(busqueda.value == "intj"){
        window.location.assign("../TFG/resultadosMbti/INTJ.php");
    }else if(busqueda.value == "intp"){
        window.location.assign("../TFG/resultadosMbti/INTP.php");
    }else if(busqueda.value == "isfj"){
        window.location.assign("../TFG/resultadosMbti/ISFJ.php");
    }else if(busqueda.value == "isfp"){
        window.location.assign("../TFG/resultadosMbti/ISFP.php");
    }else if(busqueda.value == "istj"){
        window.location.assign("../TFG/resultadosMbti/ISTJ.php");
    }else if(busqueda.value == "istp"){
        window.location.assign("../TFG/resultadosMbti/ISTP.php");
    }else if(busqueda.value == "tipo1"){
        window.location.assign("../TFG/resultadosEneagrama/tipo1.php");
    }else if(busqueda.value == "tipo2"){
        window.location.assign("../TFG/resultadosEneagrama/tipo2.php");
    }else if(busqueda.value == "tipo3"){
        window.location.assign("../TFG/resultadosEneagrama/tipo3.php");
    }else if(busqueda.value == "tipo4"){
        window.location.assign("../TFG/resultadosEneagrama/tipo4.php");
    }else if(busqueda.value == "tipo5"){
        window.location.assign("../TFG/resultadosEneagrama/tipo5.php");
    }else if(busqueda.value == "tipo6"){
        window.location.assign("../TFG/resultadosEneagrama/tipo6.php");
    }else if(busqueda.value == "tipo7"){
        window.location.assign("../TFG/resultadosEneagrama/tipo7.php");
    }else if(busqueda.value == "tipo8"){
        window.location.assign("../TFG/resultadosEneagrama/tipo8.php");
    }else if(busqueda.value == "tipo9"){
        window.location.assign("../TFG/resultadosEneagrama/tipo9.php");
    }
})

buscar2.addEventListener("click",() =>{

    if(busqueda2.value == "enfj"){
        window.location.assign("../TFG/resultadosMbti/ENFJ.php");
    }else if(busqueda2.value == "enfp"){
        window.location.assign("../TFG/resultadosMbti/ENFP.php");
    }else if(busqueda2.value == "entj"){
        window.location.assign("../TFG/resultadosMbti/ENTJ.php");
    }else if(busqueda2.value == "entp"){
        window.location.assign("../TFG/resultadosMbti/ENTP.php");
    }else if(busqueda2.value == "esfj"){
        window.location.assign("../TFG/resultadosMbti/ESFJ.php");
    }else if(busqueda2.value == "esfp"){
        window.location.assign("../TFG/resultadosMbti/ESFP.php");
    }else if(busqueda2.value == "estj"){
        window.location.assign("../TFG/resultadosMbti/ESTJ.php");
    }else if(busqueda2.value == "estp"){
        window.location.assign("../TFG/resultadosMbti/ESTP.php");
    }else if(busqueda2.value == "infj"){
        window.location.assign("../TFG/resultadosMbti/INFJ.php");
    }else if(busqueda2.value == "infp"){
        window.location.assign("../TFG/resultadosMbti/INFP.php");
    }else if(busqueda2.value == "intj"){
        window.location.assign("../TFG/resultadosMbti/INTJ.php");
    }else if(busqueda2.value == "intp"){
        window.location.assign("../TFG/resultadosMbti/INTP.php");
    }else if(busqueda2.value == "isfj"){
        window.location.assign("../TFG/resultadosMbti/ISFJ.php");
    }else if(busqueda2.value == "isfp"){
        window.location.assign("../TFG/resultadosMbti/ISFP.php");
    }else if(busqueda2.value == "istj"){
        window.location.assign("../TFG/resultadosMbti/ISTJ.php");
    }else if(busqueda2.value == "istp"){
        window.location.assign("../TFG/resultadosMbti/ISTP.php");
    }else if(busqueda2.value == "tipo1"){
        window.location.assign("../TFG/resultadosEneagrama/tipo1.php");
    }else if(busqueda2.value == "tipo2"){
        window.location.assign("../TFG/resultadosEneagrama/tipo2.php");
    }else if(busqueda2.value == "tipo3"){
        window.location.assign("../TFG/resultadosEneagrama/tipo3.php");
    }else if(busqueda2.value == "tipo4"){
        window.location.assign("../TFG/resultadosEneagrama/tipo4.php");
    }else if(busqueda2.value == "tipo5"){
        window.location.assign("../TFG/resultadosEneagrama/tipo5.php");
    }else if(busqueda2.value == "tipo6"){
        window.location.assign("../TFG/resultadosEneagrama/tipo6.php");
    }else if(busqueda2.value == "tipo7"){
        window.location.assign("../TFG/resultadosEneagrama/tipo7.php");
    }else if(busqueda2.value == "tipo8"){
        window.location.assign("../TFG/resultadosEneagrama/tipo8.php");
    }else if(busqueda2.value == "tipo9"){
        window.location.assign("../TFG/resultadosEneagrama/tipo9.php");
    }
})


salir.addEventListener("click",function(){
    window.location.assign("login.php");
});

salir2.addEventListener("click",function(){
    window.location.assign("login.php");
});

