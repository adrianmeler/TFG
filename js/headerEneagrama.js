let icono = document.getElementById("usuario");
let menu = document.getElementById("contenido-menu-desplegable");
let mensaje = document.getElementById("mensaje");
let botones = document.getElementById("botones");
let salir = document.getElementById("salir");
let cerrar = document.getElementById("cerrar");
let barras = document.getElementById("barras");
let menu2 = document.getElementById("menu-desplegable2");
let cerrar2 = document.getElementById("cerrar2");
let mensaje2 = document.getElementById("mensaje2");
let salir2 = document.getElementById("salir2");
let busqueda = document.getElementById("busqueda");
let busqueda2 = document.getElementById("busqueda2");
let buscar2 = document.getElementById("buscar2");
let buscar = document.getElementById("buscar");

barras.addEventListener("click", () => {
    if (menu2.style.visibility === 'hidden') {
        menu2.style.visibility = "visible";
        //icono.style = "margin-left:80%";

    } else {
        menu2.style.visibility = "hidden";
        mensaje2.style.display = "none";;
        //icono.style = "margin-right:15%";
    }
})

icono.addEventListener("click", function(){
   if(menu.style.display ==='none'){
    menu.style.display ="block";
    //icono.style = "margin-left:80%";
    
   }else{
    menu.style.display ="none";
    mensaje.style.display = "none";
    //icono.style = "margin-right:15%";
   }
});

cerrar.addEventListener("click", function(){
    
    if (mensaje.style.display === 'none') {
        mensaje.style.display = "block";
        //icono.style = "margin-left:80%";

    } else {
        mensaje.style.display = "none";
        //icono.style = "margin-right:15%";
    }
})

cerrar2.addEventListener("click", () =>{
    if (mensaje2.style.display === 'none') {
        mensaje2.style.display = "block";
        //icono.style = "margin-left:80%";

    } else {
        mensaje2.style.display = "none";
        //icono.style = "margin-right:15%";
    }
})

buscar.addEventListener("click",() =>{

    if(busqueda.value == "enfj"){
        window.location.assign("../resultadosMbti/ENFJ.php");
    }else if(busqueda.value == "enfp"){
        window.location.assign("../resultadosMbti/ENFP.php");
    }else if(busqueda.value == "entj"){
        window.location.assign("../resultadosMbti/ENTJ.php");
    }else if(busqueda.value == "entp"){
        window.location.assign("../resultadosMbti/ENTP.php");
    }else if(busqueda.value == "esfj"){
        window.location.assign("../resultadosMbti/ESFJ.php");
    }else if(busqueda.value == "esfp"){
        window.location.assign("../resultadosMbti/ESFP.php");
    }else if(busqueda.value == "estj"){
        window.location.assign("../resultadosMbti/ESTJ.php");
    }else if(busqueda.value == "estp"){
        window.location.assign("../resultadosMbti/ESTP.php");
    }else if(busqueda.value == "infj"){
        window.location.assign("../resultadosMbti/INFJ.php");
    }else if(busqueda.value == "infp"){
        window.location.assign("../resultadosMbti/INFP.php");
    }else if(busqueda.value == "intj"){
        window.location.assign("../resultadosMbti/INTJ.php");
    }else if(busqueda.value == "intp"){
        window.location.assign("../resultadosMbti/INTP.php");
    }else if(busqueda.value == "isfj"){
        window.location.assign("../resultadosMbti/ISFJ.php");
    }else if(busqueda.value == "isfp"){
        window.location.assign("../resultadosMbti/ISFP.php");
    }else if(busqueda.value == "istj"){
        window.location.assign("../resultadosMbti/ISTJ.php");
    }else if(busqueda.value == "istp"){
        window.location.assign("../resultadosMbti/ISTP.php");
    }else if(busqueda.value == "tipo1"){
        window.location.assign("tipo1.php");
    }else if(busqueda.value == "tipo2"){
        window.location.assign("tipo2.php");
    }else if(busqueda.value == "tipo3"){
        window.location.assign("tipo3.php");
    }else if(busqueda.value == "tipo4"){
        window.location.assign("tipo4.php");
    }else if(busqueda.value == "tipo5"){
        window.location.assign("tipo5.php");
    }else if(busqueda.value == "tipo6"){
        window.location.assign("tipo6.php");
    }else if(busqueda.value == "tipo7"){
        window.location.assign("tipo7.php");
    }else if(busqueda.value == "tipo8"){
        window.location.assign("tipo8.php");
    }else if(busqueda.value == "tipo9"){
        window.location.assign("tipo9.php");
    }
})

buscar2.addEventListener("click",() =>{

    if(busqueda2.value == "enfj"){
        window.location.assign("../resultadosMbti/ENFJ.php");
    }else if(busqueda2.value == "enfp"){
        window.location.assign("../resultadosMbti/ENFP.php");
    }else if(busqueda2.value == "entj"){
        window.location.assign("../resultadosMbti/ENTJ.php");
    }else if(busqueda2.value == "entp"){
        window.location.assign("../resultadosMbti/ENTP.php");
    }else if(busqueda2.value == "esfj"){
        window.location.assign("../resultadosMbti/ESFJ.php");
    }else if(busqueda2.value == "esfp"){
        window.location.assign("../resultadosMbti/ESFP.php");
    }else if(busqueda2.value == "estj"){
        window.location.assign("../resultadosMbti/ESTJ.php");
    }else if(busqueda2.value == "estp"){
        window.location.assign("../resultadosMbti/ESTP.php");
    }else if(busqueda2.value == "infj"){
        window.location.assign("../resultadosMbti/INFJ.php");
    }else if(busqueda2.value == "infp"){
        window.location.assign("../resultadosMbti/INFP.php");
    }else if(busqueda2.value == "intj"){
        window.location.assign("../resultadosMbti/INTJ.php");
    }else if(busqueda2.value == "intp"){
        window.location.assign("../resultadosMbti/INTP.php");
    }else if(busqueda2.value == "isfj"){
        window.location.assign("../resultadosMbti/ISFJ.php");
    }else if(busqueda2.value == "isfp"){
        window.location.assign("../resultadosMbti/ISFP.php");
    }else if(busqueda2.value == "istj"){
        window.location.assign("../resultadosMbti/ISTJ.php");
    }else if(busqueda2.value == "istp"){
        window.location.assign("../resultadosMbti/ISTP.php");
    }else if(busqueda2.value == "tipo1"){
        window.location.assign("tipo1.php");
    }else if(busqueda2.value == "tipo2"){
        window.location.assign("tipo2.php");
    }else if(busqueda2.value == "tipo3"){
        window.location.assign("tipo3.php");
    }else if(busqueda2.value == "tipo4"){
        window.location.assign("tipo4.php");
    }else if(busqueda2.value == "tipo5"){
        window.location.assign("tipo5.php");
    }else if(busqueda2.value == "tipo6"){
        window.location.assign("tipo6.php");
    }else if(busqueda2.value == "tipo7"){
        window.location.assign("tipo7.php");
    }else if(busqueda2.value == "tipo8"){
        window.location.assign("tipo8.php");
    }else if(busqueda2.value == "tipo9"){
        window.location.assign("tipo9.php");
    }
})

salir.addEventListener("click",function(){
    window.location.assign("../login.php");
});

salir2.addEventListener("click",function(){
    window.location.assign("../login.php");
});