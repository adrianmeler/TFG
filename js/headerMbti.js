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



buscar.addEventListener("click",() =>{

    if(busqueda.value == "enfj"){
        window.location.assign("ENFJ.php");
    }else if(busqueda.value == "enfp"){
        window.location.assign("ENFP.php");
    }else if(busqueda.value == "entj"){
        window.location.assign("ENTJ.php");
    }else if(busqueda.value == "entp"){
        window.location.assign("ENTP.php");
    }else if(busqueda.value == "esfj"){
        window.location.assign("ESFJ.php");
    }else if(busqueda.value == "esfp"){
        window.location.assign("ESFP.php");
    }else if(busqueda.value == "estj"){
        window.location.assign("ESTJ.php");
    }else if(busqueda.value == "estp"){
        window.location.assign("ESTP.php");
    }else if(busqueda.value == "infj"){
        window.location.assign("INFJ.php");
    }else if(busqueda.value == "infp"){
        window.location.assign("INFP.php");
    }else if(busqueda.value == "intj"){
        window.location.assign("INTJ.php");
    }else if(busqueda.value == "intp"){
        window.location.assign("INTP.php");
    }else if(busqueda.value == "isfj"){
        window.location.assign("ISFJ.php");
    }else if(busqueda.value == "isfp"){
        window.location.assign("ISFP.php");
    }else if(busqueda.value == "istj"){
        window.location.assign("ISTJ.php");
    }else if(busqueda.value == "istp"){
        window.location.assign("ISTP.php");
    }else if(busqueda.value == "tipo1"){
        window.location.assign("../resultadosEneagrama/tipo1.php");
    }else if(busqueda.value == "tipo2"){
        window.location.assign("../resultadosEneagrama/tipo2.php");
    }else if(busqueda.value == "tipo3"){
        window.location.assign("../resultadosEneagrama/tipo3.php");
    }else if(busqueda.value == "tipo4"){
        window.location.assign("../resultadosEneagrama/tipo4.php");
    }else if(busqueda.value == "tipo5"){
        window.location.assign("../resultadosEneagrama/tipo5.php");
    }else if(busqueda.value == "tipo6"){
        window.location.assign("../resultadosEneagrama/tipo6.php");
    }else if(busqueda.value == "tipo7"){
        window.location.assign("../resultadosEneagrama/tipo7.php");
    }else if(busqueda.value == "tipo8"){
        window.location.assign("../resultadosEneagrama/tipo8.php");
    }else if(busqueda.value == "tipo9"){
        window.location.assign("../resultadosEneagrama/tipo9.php");
    }
})

buscar2.addEventListener("click",() =>{

    if(busqueda2.value == "enfj"){
        window.location.assign("ENFJ.php");
    }else if(busqueda2.value == "enfp"){
        window.location.assign("ENFP.php");
    }else if(busqueda2.value == "entj"){
        window.location.assign("ENTJ.php");
    }else if(busqueda2.value == "entp"){
        window.location.assign("ENTP.php");
    }else if(busqueda2.value == "esfj"){
        window.location.assign("ESFJ.php");
    }else if(busqueda2.value == "esfp"){
        window.location.assign("ESFP.php");
    }else if(busqueda2.value == "estj"){
        window.location.assign("ESTJ.php");
    }else if(busqueda2.value == "estp"){
        window.location.assign("ESTP.php");
    }else if(busqueda2.value == "infj"){
        window.location.assign("INFJ.php");
    }else if(busqueda2.value == "infp"){
        window.location.assign("INFP.php");
    }else if(busqueda2.value == "intj"){
        window.location.assign("INTJ.php");
    }else if(busqueda2.value == "intp"){
        window.location.assign("INTP.php");
    }else if(busqueda2.value == "isfj"){
        window.location.assign("ISFJ.php");
    }else if(busqueda2.value == "isfp"){
        window.location.assign("ISFP.php");
    }else if(busqueda2.value == "istj"){
        window.location.assign("ISTJ.php");
    }else if(busqueda2.value == "istp"){
        window.location.assign("ISTP.php");
    }else if(busqueda2.value == "tipo1"){
        window.location.assign("../resultadosEneagrama/tipo1.php");
    }else if(busqueda2.value == "tipo2"){
        window.location.assign("../resultadosEneagrama/tipo2.php");
    }else if(busqueda2.value == "tipo3"){
        window.location.assign("../resultadosEneagrama/tipo3.php");
    }else if(busqueda2.value == "tipo4"){
        window.location.assign("../resultadosEneagrama/tipo4.php");
    }else if(busqueda2.value == "tipo5"){
        window.location.assign("../resultadosEneagrama/tipo5.php");
    }else if(busqueda2.value == "tipo6"){
        window.location.assign("../resultadosEneagrama/tipo6.php");
    }else if(busqueda2.value == "tipo7"){
        window.location.assign("../resultadosEneagrama/tipo7.php");
    }else if(busqueda2.value == "tipo8"){
        window.location.assign("../resultadosEneagrama/tipo8.php");
    }else if(busqueda2.value == "tipo9"){
        window.location.assign("../resultadosEneagrama/tipo9.php");
    }
})


salir.addEventListener("click",function(){
    window.location.assign("../login.php");
});

salir2.addEventListener("click",function(){
    window.location.assign("../login.php");
});