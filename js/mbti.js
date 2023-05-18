let preguntas = ["Te resulta dificil presentarte a ti mismo frente a otras personas?",
    "A menudo te quedas tan absorto en tus pensamientos que ignoras el entorno que te rodea? ",
    "Tratas de responder a todos tus correos electrónicos lo más pronto posible?",
    "Te resulta fácil permanecer relajado y concentrado incluso cuando hay algo de presión?",
    "Normalmente no sueles iniciar las conversaciones con gente nueva?",
    "Es muy raro que hagas algo simplemente por pura curiosidad?",
    "Te sientes superior a otras personas? ",
    "Para ti es más importante ser organizado que ser capaz de adaptarte a las circunstancias? ",
    "Normalmente te sientes muy motivado y con mucha energía?",
    "Cuando hay un debate, te importa menos ganarlo que asegurarte de que nadie se sienta molesto?",
    "Con frecuencia sientes que tienes que justificarte ante otras personas?",
    "Tu casa y tu entorno de trabajo están muy ordenados?",
    "No te importa ni te incomoda ser el centro de atención? ",
    "Te consideras una persona más práctica que creativa?",
    "Es muy raro que la gente te haga sentirte molesto o alterado?",
    "Tus planes de viaje generalmente están bien pensados?",
    "Con frecuencia te resulta difícil entender los sentimientos de otras personas?",
    "Tu estado de ánimo o humor puede cambiar muy rápidamente?",
    "En una discusión o debate, debería ser más importante la verdad que la susceptibilidad de la gente? ",
    "Muy raramente te preocupa cómo afectan tus acciones a otras personas?",
    "Tu estilo de trabajo se parece más a rachas aleatorias de mucha energía que a un enfoque metódico y organizado? ",
    "Con frecuencia sientes envidia de otros?",
    "Para ti, un libro o videojuego interesante normalmente es mejor que un evento social?",
    "Ser capaz de desarrollar un plan y adherirse a él es la parte más importante de todo proyecto? ",
    "Es muy raro que te dejes llevar por fantasías o ideas?",
    "Con frecuencia te sientes ensimismado cuando caminas por entornos de la naturaleza?",
    "Si alguien no responde con rapidez a tu correo electrónico, comienzas a preocuparte porque piensas que has podido decir algo incorrecto?",
    "Como progenitor, preferirías que tu hijo fuera amable antes que inteligente?",
    "No dejas que otras personas influyan en tus acciones?",
    "Tus sueños tienden a concentrarse en el mundo real y sus acontecimientos?",
    "No te lleva mucho tiempo comenzar a implicarte en actividades sociales en tu nuevo entorno de trabajo?",
    "Eres más un improvisador natural que un planificador cuidadoso?",
    "Tus emociones te controlan más de lo que tú las controlas?",
    "Disfrutas asistiendo a eventos sociales que requieren ir bien vestido o participando en actividades que requieren representar un papel?",
    "A menudo pasas tiempo explorando ideas irreales y poco prácticas pero intrigantes?",
    "Prefieres improvisar a tener que dedicar tiempo a desarrollar un plan detallado?",
    "Eres una persona relativamente reservada y callada?",
    "Si tuvieras un negocio te costaría mucho despedir a empleados que son leales aunque su rendimiento estuviera por debajo de lo esperado?",
    "A menudo piensas en las razones de la existencia humana?",
    "Consideras que la lógica generalmente es más importante que el corazón cuando se trata de tomar decisiones importantes.",
    "Disponer de todas tus opciones es más importante que tener una lista preestablecida de cosas que hacer?",
    "Si tu amigo se siente triste por algo, es más probable que le ofrezcas apoyo emocional que sugerirle formas de tratar el problema?",
    "Raramente te sientes inseguro?",
    "No tienes dificultades para diseñar una agenda personal de actividades y adherirte a ella?",
    "Cuando se trata del trabajo en equipo, tener razón es más importante que ser cooperativo?",
    "Piensas que se deben respetar las opiniones de todos, independientemente de si están respaldadas por hechos probados o no?",
    "Te sientes más dinámico después de pasar tiempo con un grupo de personas?",
    "Con frecuencia, extravías tus cosas?", "Te consideras una persona emocionalmente muy estable?",
    "Tu mente está siempre muy activa con ideas y planes no explorados?", "No te consideras un soñador?",
    "En general, te resulta difícil relajarte cuando hablas delante de muchas personas?",
    "Por lo general confías más en tu experiencia que en tu imaginación?",
    "Te preocupa demasiado lo que piensan otras personas?",
    "Si la sala está llena te quedas cerca de las paredes y evitas estar en el centro?",
    "Tienes una tendencia a posponer cosas hasta que no queda tiempo suficiente para hacer todo lo que tienes que hacer?",
    "Sientes mucha ansiedad en situaciones de estrés?",
    "Crees que es mucho más gratificante gustar a la gente que ser poderoso?",
    "Siempre has estado interesado en cosas poco convencionales y ambiguas, por ejemplo libros, arte o películas de cine?",
    "Tomas la iniciativa frecuentemente en situaciones sociales?"
];

console.log(preguntas.length);

let dobleLinea = [
    preguntas[1], preguntas[2], preguntas[7], preguntas[9], preguntas[18], preguntas[20], preguntas[23],
    preguntas[26], preguntas[30], preguntas[33], preguntas[37], preguntas[39],
    preguntas[40], preguntas[41], preguntas[43], preguntas[44], preguntas[45],
    preguntas[55], preguntas[58]
];

const comenzar = document.getElementById("comenzar");
const test = document.getElementById("startTest");
let pregunta = document.getElementById("preguntas");
const next = document.getElementById("next");
const options = document.getElementById("options");
const buttons = document.querySelector(".opciones");
let indicePregunta = 0;
let resultado = document.getElementById("resultado");
const opt1 = document.getElementById("opt1");
const opt2 = document.getElementById("opt2");
const opt3 = document.getElementById("opt3");
const opt4 = document.getElementById("opt4");
const opt5 = document.getElementById("opt5");
const opt6 = document.getElementById("opt6");
const opt7 = document.getElementById("opt7");
const opt8 = document.getElementById("opt8");
const opt9 = document.getElementById("opt9");
const opt10 = document.getElementById("opt10");
const opt11 = document.getElementById("opt11");
const opt12 = document.getElementById("opt12");
const opt13 = document.getElementById("opt13");
const opt14 = document.getElementById("opt14");
const opt15 = document.getElementById("opt15");
const opt16 = document.getElementById("opt16");
const opt17 = document.getElementById("opt17");
const opt18 = document.getElementById("opt18");
const opt19 = document.getElementById("opt19");
const opt20 = document.getElementById("opt20");
const opt21 = document.getElementById("opt21");
const opt22 = document.getElementById("opt22");
const opt23 = document.getElementById("opt23");
const opt24 = document.getElementById("opt24");
const opt25 = document.getElementById("opt25");
const opt26 = document.getElementById("opt26");
const opt27 = document.getElementById("opt27");
const opt28 = document.getElementById("opt28");
const opt29 = document.getElementById("opt29");
const opt30 = document.getElementById("opt30");
const opt31 = document.getElementById("opt31");
const opt32 = document.getElementById("opt32");
const opt33 = document.getElementById("opt33");
const opt34 = document.getElementById("opt34");
const opt35 = document.getElementById("opt35");
const opt36 = document.getElementById("opt36");
const opt37 = document.getElementById("opt37");
const opt38 = document.getElementById("opt38");
const opt39 = document.getElementById("opt39");
const opt40 = document.getElementById("opt40");
const opt41 = document.getElementById("opt41");
const opt42 = document.getElementById("opt42");
const opt43 = document.getElementById("opt43");
const opt44 = document.getElementById("opt44");
const opt45 = document.getElementById("opt45");
const opt46 = document.getElementById("opt46");
const opt47 = document.getElementById("opt47");
const opt48 = document.getElementById("opt48");
const opt49 = document.getElementById("opt49");
const opt50 = document.getElementById("opt50");
const opt51 = document.getElementById("opt51");
const opt52 = document.getElementById("opt52");
const opt53 = document.getElementById("opt53");
const opt54 = document.getElementById("opt54");
const opt55 = document.getElementById("opt55");
const opt56 = document.getElementById("opt56");
const opt57 = document.getElementById("opt57");
const opt58 = document.getElementById("opt58");
const opt59 = document.getElementById("opt59");
const v1 = document.getElementById("v1");
const i1 = document.getElementById("i1");
const f1 = document.getElementById("f1");
const v2 = document.getElementById("v2");
const i2 = document.getElementById("i2");
const f2 = document.getElementById("f2");
const v3 = document.getElementById("v3");
const i3 = document.getElementById("i3");
const f3 = document.getElementById("f3");
const v4 = document.getElementById("v4");
const i4 = document.getElementById("i4");
const f4 = document.getElementById("f4");
const v5 = document.getElementById("v5");
const i5 = document.getElementById("i5");
const f5 = document.getElementById("f5");
const v6 = document.getElementById("v6");
const i6 = document.getElementById("i6");
const f6 = document.getElementById("f6");
const v7 = document.getElementById("v7");
const i7 = document.getElementById("i7");
const f7 = document.getElementById("f7");
const v8 = document.getElementById("v8");
const i8 = document.getElementById("i8");
const f8 = document.getElementById("f8");
const v9 = document.getElementById("v9");
const i9 = document.getElementById("i9");
const f9 = document.getElementById("f9");
const v10 = document.getElementById("v10");
const i10 = document.getElementById("i10");
const f10 = document.getElementById("f10");
const v11 = document.getElementById("v11");
const i11 = document.getElementById("i11");
const f11 = document.getElementById("f11");
const v12 = document.getElementById("v12");
const i12 = document.getElementById("i12");
const f12 = document.getElementById("f12");
const v13 = document.getElementById("v13");
const i13 = document.getElementById("i13");
const f13 = document.getElementById("f13");
const v14 = document.getElementById("v14");
const i14 = document.getElementById("i14");
const f14 = document.getElementById("f14");
const v15 = document.getElementById("v15");
const i15 = document.getElementById("i15");
const f15 = document.getElementById("f15");
const v16 = document.getElementById("v16");
const i16 = document.getElementById("i16");
const f16 = document.getElementById("f16");
const v17 = document.getElementById("v17");
const i17 = document.getElementById("i17");
const f17 = document.getElementById("f17");
const v18 = document.getElementById("v18");
const i18 = document.getElementById("i18");
const f18 = document.getElementById("f18");
const v19 = document.getElementById("v19");
const i19 = document.getElementById("i19");
const f19 = document.getElementById("f19");
const v20 = document.getElementById("v20");
const i20 = document.getElementById("i20");
const f20 = document.getElementById("f20");
const v21 = document.getElementById("v21");
const i21 = document.getElementById("i21");
const f21 = document.getElementById("f21");
const v22 = document.getElementById("v22");
const i22 = document.getElementById("i22");
const f22 = document.getElementById("f22");
const v23 = document.getElementById("v23");
const i23 = document.getElementById("i23");
const f23 = document.getElementById("f23");
const v24 = document.getElementById("v24");
const i24 = document.getElementById("i24");
const f24 = document.getElementById("f24");
const v25 = document.getElementById("v25");
const i25 = document.getElementById("i25");
const f25 = document.getElementById("f25");
const v26 = document.getElementById("v26");
const i26 = document.getElementById("i26");
const f26 = document.getElementById("f26");
const v27 = document.getElementById("v27");
const i27 = document.getElementById("i27");
const f27 = document.getElementById("f27");
const v28 = document.getElementById("v28");
const i28 = document.getElementById("i28");
const f28 = document.getElementById("f28");
const v29 = document.getElementById("v29");
const i29 = document.getElementById("i29");
const f29 = document.getElementById("f29");
const v30 = document.getElementById("v30");
const i30 = document.getElementById("i30");
const f30 = document.getElementById("f30");
const v31 = document.getElementById("v31");
const i31 = document.getElementById("i31");
const f31 = document.getElementById("f31");
const v32 = document.getElementById("v32");
const i32 = document.getElementById("i32");
const f32 = document.getElementById("f32");
const v33 = document.getElementById("v33");
const i33 = document.getElementById("i33");
const f33 = document.getElementById("f33");
const v34 = document.getElementById("v34");
const i34 = document.getElementById("i34");
const f34 = document.getElementById("f34");
const v35 = document.getElementById("v35");
const i35 = document.getElementById("i35");
const f35 = document.getElementById("f35");
const v36 = document.getElementById("v36");
const i36 = document.getElementById("i36");
const f36 = document.getElementById("f36");
const v37 = document.getElementById("v37");
const i37 = document.getElementById("i37");
const f37 = document.getElementById("f37");
const v38 = document.getElementById("v38");
const i38 = document.getElementById("i38");
const f38 = document.getElementById("f38");
const v39 = document.getElementById("v39");
const i39 = document.getElementById("i39");
const f39 = document.getElementById("f39");
const v40 = document.getElementById("v40");
const i40 = document.getElementById("i40");
const f40 = document.getElementById("f40");
const v41 = document.getElementById("v41");
const i41 = document.getElementById("i41");
const f41 = document.getElementById("f41");
const v42 = document.getElementById("v42");
const i42 = document.getElementById("i42");
const f42 = document.getElementById("f42");
const v43 = document.getElementById("v43");
const i43 = document.getElementById("i43");
const f43 = document.getElementById("f43");
const v44 = document.getElementById("v44");
const i44 = document.getElementById("i44");
const f44 = document.getElementById("f44");
const v45 = document.getElementById("v45");
const i45 = document.getElementById("i45");
const f45 = document.getElementById("f45");
const v46 = document.getElementById("v46");
const i46 = document.getElementById("i46");
const f46 = document.getElementById("f46");
const v47 = document.getElementById("v47");
const i47 = document.getElementById("i47");
const f47 = document.getElementById("f47");
const v48 = document.getElementById("v48");
const i48 = document.getElementById("i48");
const f48 = document.getElementById("f48");
const v49 = document.getElementById("v49");
const i49 = document.getElementById("i49");
const f49 = document.getElementById("f49");
const v50 = document.getElementById("v50");
const i50 = document.getElementById("i50");
const f50 = document.getElementById("v50");
const v51 = document.getElementById("i51");
const i51 = document.getElementById("f51");
const f51 = document.getElementById("f51");
const v52 = document.getElementById("v52");
const i52 = document.getElementById("i52");
const f52 = document.getElementById("f52");
const v53 = document.getElementById("v53");
const i53 = document.getElementById("i53");
const f53 = document.getElementById("f53");
const v54 = document.getElementById("v54");
const i54 = document.getElementById("i54");
const f54 = document.getElementById("f54");
const v55 = document.getElementById("v55");
const i55 = document.getElementById("i55");
const f55 = document.getElementById("f55");
const v56 = document.getElementById("v56");
const i56 = document.getElementById("i56");
const f56 = document.getElementById("f56");
const v57 = document.getElementById("v57");
const i57 = document.getElementById("i57");
const f57 = document.getElementById("f57");
const v58 = document.getElementById("v58");
const i58 = document.getElementById("i58");
const f58 = document.getElementById("f58");
const v59 = document.getElementById("v59");
const i59 = document.getElementById("i59");
const f59 = document.getElementById("f59");
const v60 = document.getElementById("v60");
const i60 = document.getElementById("i60");
const f60 = document.getElementById("f60");
const resultadoESTP = document.getElementById("resultadoESTP");
const resultadoESTJ = document.getElementById("resultadoESTJ");
const resultadoESFP = document.getElementById("resultadoESFP");
const resultadoESFJ = document.getElementById("resultadoESFJ");
const resultadoENTP = document.getElementById("resultadoENTP");
const resultadoENTJ = document.getElementById("resultadoENTJ");
const resultadoENFP = document.getElementById("resultadoENFP");
const resultadoENFJ = document.getElementById("resultadoENFJ");
const resultadoISTP = document.getElementById("resultadoISTP");
const resultadoISTJ = document.getElementById("resultadoISTJ");
const resultadoISFP = document.getElementById("resultadoISFP");
const resultadoISFJ = document.getElementById("resultadoISFJ");
const resultadoINTP = document.getElementById("resultadoINTP");
const resultadoINTJ = document.getElementById("resultadoINTJ");
const resultadoINFP = document.getElementById("resultadoINFP");
const resultadoINFJ = document.getElementById("resultadoINFJ");
const mostrarResultado = document.getElementById("mostrarResultado");
var imgEnfp = document.getElementById("imgEnfp");
var imgEnfj = document.getElementById("imgEnfj");
var imgEntp = document.getElementById("imgEntp");
var imgEntj = document.getElementById("imgEntj");
var imgEsfp = document.getElementById("imgEsfp");
var imgEsfj = document.getElementById("imgEsfj");
var imgEstp = document.getElementById("imgEstp");
var imgEstj = document.getElementById("imgEstj");
var imgInfp = document.getElementById("imgInfp");
var imgInfj = document.getElementById("imgInfj");
var imgIntp = document.getElementById("imgIntp");
var imgIntj = document.getElementById("imgIntj");
var imgIsfp = document.getElementById("imgIsfp");
var imgIsfj = document.getElementById("imgIsfj");
var imgIstp = document.getElementById("imgIstp");
var imgIstj = document.getElementById("imgIstj");
let indiceI = 0;
let indiceE = 0;
let indiceS = 0;
let indiceN = 0;
let indiceT = 0;
let indiceF = 0;
let indiceJ = 0;
let indiceP = 0;
let sigla1;
let sigla2;
let sigla3;
let sigla4;
let siglas;



let radios = [opt1, opt2, opt3, opt4, opt5, opt6, opt7, opt8, opt9, opt10, opt11, opt12, opt13, opt14, opt15,
    opt16, opt17, opt18, opt19, opt20,
    opt21, opt22, opt23, opt24, opt25, opt26, opt27, opt28, opt29, opt30, opt31, opt32, opt33, opt34, opt35,
    opt36, opt37, opt38, opt39, opt40, opt41, opt42, opt43, opt44, opt45, opt46, opt47, opt48,
    opt49, opt50, opt51, opt52, opt53, opt54, opt55, opt56, opt57, opt58, opt59,opt60
];


comenzar.addEventListener("click", function () {

    document.getElementById("form").remove();
    test.style = "display:block";
    pregunta.innerHTML = preguntas[indicePregunta];
    radios[indicePregunta].style.cssText =
        "display:block; display:flex; flex-direction:column;justify-content:space-around";

})


next.addEventListener("click", function () {
    indicePregunta++;
    pregunta.innerHTML = preguntas[indicePregunta];
    radios[indicePregunta - 1].style.display = "none";

    if((indicePregunta == 2) || (indicePregunta == 3) || (indicePregunta == 8) || (indicePregunta == 10)
    || (indicePregunta == 14) || (indicePregunta == 21) || (indicePregunta == 23) || (indicePregunta == 30) || (indicePregunta == 36) || (indicePregunta == 44)
    || (indicePregunta == 45) || (indicePregunta == 47) || (indicePregunta == 50) || (indicePregunta == 56)){
        buttons.style.bottom = "10px";
    }else if((indicePregunta == 7) || (indicePregunta == 15) || (indicePregunta == 22) || (indicePregunta == 37) || (indicePregunta == 43) || (indicePregunta == 48) ||
    (indicePregunta == 51) || (indicePregunta == 57)){
        buttons.style.top = "30px";
    }

    if (indicePregunta < 60) {
        radios[indicePregunta].style.cssText =
            "display:block; display:flex; flex-direction:column;justify-content:space-around";
    }else if(indicePregunta == 60) {
            mostrarResultado.style.display = "block";
            next.style.display = "none";
            previous.style.display="none";
            pregunta.style.display="none";
    
    }
})

previous.addEventListener("click", function () {
    indicePregunta--;

    if((indicePregunta == 1) || (indicePregunta == 2) || (indicePregunta == 7) || (indicePregunta == 9) || (indicePregunta == 18)
    || (indicePregunta == 20) || (indicePregunta == 23) || (indicePregunta == 26) || (indicePregunta == 30) || (indicePregunta == 33) || (indicePregunta == 37) || (indicePregunta == 39)
    || (indicePregunta == 40) || (indicePregunta == 41) || (indicePregunta == 43) || (indicePregunta == 44) || (indicePregunta == 45) || (indicePregunta == 55) || (indicePregunta == 58)){
        buttons.style.marginTop = "92px";
    }else{
        buttons.style.marginTop = "110px";
    }
    pregunta.innerHTML = preguntas[indicePregunta];
    radios[indicePregunta].style.cssText =
        "display:block; display:flex; flex-direction:column;justify-content:space-around";
    radios[indicePregunta + 1].style = "visibility:hidden";

})

mostrarResultado.addEventListener("click", () =>{

    if (v1.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceJ++;
    }

    if(i1.checked){
        indiceI++;
        indiceN++;
        indiceF++;
        indiceJ++;
    }
    
    if(f1.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceP++;
    }

    if(v2.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }

    if(i2.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f2.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v3.checked) {
        indiceE++;
        indiceJ++;
        indiceN++;
        indiceT++;
    }
    
    if(i3.checked) {
        indiceE++;
        indiceJ++;
        indiceN++;
        indiceF++;
    }
    
    if(f3.checked) {
        indiceI++;
        indiceP++;
        indiceS++;
        indiceF++;
    }
    
    if(v4.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i4.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f4.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }

    if(v5.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i5.checked) {
        indiceI++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f5.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v6.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i6.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f6.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v7.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i7.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f7.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v8.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i8.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f8.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v9.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i9.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f9.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v10.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i10.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceP++;
    }
    
    if(f10.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v11.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(i11.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f11.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(v12.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i12.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f12.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v13.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i13.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f13.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v14.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i14.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f14.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v15.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i15.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f15.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v16.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i16.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f16.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v17.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i17.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f17.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v18.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i18.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f18.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v19.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(i19.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f19.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(v20.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i20.checked) {
        indiceE++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f20.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v21.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i21.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f21.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v22.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i22.checked) {
        indiceI++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f22.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v23.checked) {
        indiceI++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(i23.checked) {
        indiceE++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f23.checked) {
        indiceE++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(v24.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i24.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f24.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v25.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i25.checked) {
        indiceI++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f25.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v26.checked) {
        indiceE++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i26.checked) {
        indiceE++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f26.checked) {
        indiceI++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v27.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i27.checked) {
        indiceI++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f27.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v28.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i28.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f28.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v29.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(i29.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f29.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(v30.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i30.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f30.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v31.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i31.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f31.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v32.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i32.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f32.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v33.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i33.checked) {
        indiceE++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f33.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v34.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i34.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f34.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v35.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i35.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f35.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v36.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i36.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f36.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v37.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i37.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f37.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v38.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i38.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f38.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v39.checked) {
        indiceI++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(i39.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f39.checked) {
        indiceE++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(v40.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i40.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f40.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v41.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i41.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f41.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v42.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i42.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f42.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v43.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i43.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f43.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v44.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i44.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f44.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v45.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i45.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f45.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v46.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i46.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f46.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v47.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i47.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f47.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v48.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i48.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f48.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v49.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i49.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f49.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v50.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i50.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f50.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v51.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(i51.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f51.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(v52.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(i52.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f52.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(v53.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i53.checked) {
        indiceI++;
        indiceN++;
        indiceF++;
        indiceP++;
    }
    
    if(f53.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v54.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i54.checked) {
        indiceE++;
        indiceS++;
        indiceT++;
        indiceJ++;
    }
    
    if(f54.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v55.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i55.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f55.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v56.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i56.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f56.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v57.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i57.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f57.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v58.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(i58.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(f58.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(v59.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i59.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f59.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }
    
    if(v60.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(i60.checked) {
        indiceE++;
        indiceS++;
        indiceF++;
        indiceP++;
    }
    
    if(f60.checked) {
        indiceI++;
        indiceN++;
        indiceT++;
        indiceJ++;
    }

    if (indiceI > indiceE) {
        sigla1 = "I";
    } else {
        sigla1 = "E";
    }

    if (indiceS > indiceN) {
        sigla2 = "S";
    } else {
        sigla2 = "N";
    }

    if (indiceT > indiceF) {
        sigla3 = "T";
    } else {
        sigla3 = "F";
    }

    if (indiceJ > indiceP) {
        sigla4 = "J";
    } else {
        sigla4 = "P";
    }

    siglas = sigla1 + sigla2 + sigla3 + sigla4;

    resultado.innerHTML = siglas;


    if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "P")) {
        resultadoESTP.style = "display:block";
        imgEsfp.style.display = "block";
    } else if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "J")) {
        resultadoENFJ.style = "display:block";
        imgEnfj.style.display="block";
    } else if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "P")) {
        resultadoENFP.style = "display:block";
        imgEnfp.style.display="block";
    } else if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "J")) {
        resultadoENTJ.style = "display:block";
        imgEntj.style.display="block";
    } else if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "P")) {
        resultadoENTP.style = "display:block";
        imgEntp.style.display="block";
    } else if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "J")) {
        resultadoESFJ.style = "display:block";
        imgEsfj.style.display="block";
    } else if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "P")) {
        resultadoESFP.style = "display:block";
        imgEsfp.style.display="block";
    } else if ((siglas.charAt(0) == "E") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "J")) {
        resultadoESTJ.style = "display:block";
        imgEstj.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "J")) {
        resultadoINFJ.style = "display:block";
        imgInfj.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "P")) {
        resultadoINFP.style = "display:block";
        imgInfp.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "J")) {
        resultadoINTJ.style = "display:block";
        imgIntj.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "N") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "P")) {
        resultadoINTP.style = "display:block";
        imgIntp.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "J")) {
        resultadoISFJ.style = "display:block";
        imgIsfj.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "F") && (siglas.charAt(3) == "P")) {
        resultadoISFP.style = "display:block";
        imgIsfp.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "J")) {
        resultadoISTJ.style = "display:block";
        imgIstj.style.display="block";
    } else if ((siglas.charAt(0) == "I") && (siglas.charAt(1) == "S") &&
        (siglas.charAt(2) == "T") && (siglas.charAt(3) == "P")) {
        resultadoISTP.style = "display:block";
        imgIstp.style.display="block";
    }

    mostrarResultado.style.display = "none";
})


resultadoESTP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ESTP.php");
})

resultadoESTJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ESTJ.php");
})

resultadoESFP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ESFP.php");
})

resultadoESFJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ESFJ.php");
})

resultadoENTP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ENTP.php");
})

resultadoENTJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ENTJ.php");
})

resultadoENFP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ENFP.php");
})

resultadoENFJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ENFJ.php");
})

resultadoISTP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ISTP.php");
})

resultadoISTJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ISTJ.php");
})

resultadoISFP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ISFP.php");
})

resultadoISFJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/ISFJ.php");
})

resultadoINTP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/INTP.php");
})

resultadoINTJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/INTJ.php");
})

resultadoINFP.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/INFP.php");
})

resultadoINFJ.addEventListener("click", function () {
    window.location.assign("../TFG/resultadosMbti/INFJ.php");
})