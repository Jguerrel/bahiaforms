/* Variables de Configuracion */
var idcanvas2='canvas2';
var idForm='formcanvas2';
var inputimagen2='imagen2';
var estiloDelCursor='crosshair';
var colorDelTrazo='red';
var colorDeFondo='#fff';
var grosorDelTrazo=2;

/* Variables necesarias */
var contexto2=null;
var valX2=0;
var valY2=0;
var flag2=false;
var imagen2=document.getElementById(inputimagen2); 
var anchocanvas2=document.getElementById(idcanvas2).offsetWidth;
var altocanvas2=document.getElementById(idcanvas2).offsetHeight;
var pizarracanvas2=document.getElementById(idcanvas2);
var imgreal=""
/* Esperamos el evento load */
window.addEventListener('load',IniciarDibujo2,false);
window.addEventListener('load',LimpiarTrazado2,false);


function IniciarDibujo2(){
  /* Creamos la pizarra */
  pizarracanvas2.style.cursor=estiloDelCursor;
  contexto2=pizarracanvas2.getContext('2d');
  contexto2.fillStyle=colorDeFondo;
  contexto2.fillRect(0,0,anchocanvas2,altocanvas2);
  contexto2.strokeStyle=colorDelTrazo;
  contexto2.lineWidth=grosorDelTrazo;
  contexto2.lineJoin='round';
  contexto2.lineCap='round';
  /* Capturamos los diferentes eventos */
  pizarracanvas2.addEventListener('mousedown',MouseDown2,false);// Click pc
  pizarracanvas2.addEventListener('mouseup',MouseUp2,false);// fin click pc
  pizarracanvas2.addEventListener('mousemove',MouseMove2,false);// arrastrar pc

  pizarracanvas2.addEventListener('touchstart',TouchStart2,false);// tocar pantalla tactil
  pizarracanvas2.addEventListener('touchmove',TouchMove2,false);// arrastras pantalla tactil
  pizarracanvas2.addEventListener('touchend',TouchEnd2,false);// fin tocar pantalla dentro de la pizarra
  pizarracanvas2.addEventListener('touchleave',TouchEnd2,false);// fin tocar pantalla fuera de la pizarra
}

function MouseDown2(e){
  flag2=true;
  contexto2.beginPath();
  valX2=e.pageX-posicionX(pizarracanvas2); valY2=e.pageY-posicionY(pizarracanvas2);
  contexto2.moveTo(valX2,valY2);
}

function MouseUp2(e){
  contexto2.closePath();
  flag2=false;
}

function MouseMove2(e){
  if(flag2){
    contexto2.beginPath();
    contexto2.moveTo(valX2,valY2);
    valX2=e.pageX-posicionX(pizarracanvas2); valY2=e.pageY-posicionY(pizarracanvas2);
    contexto2.lineTo(valX2,valY2);
    contexto2.closePath();
    contexto2.stroke();
  }
}

function TouchMove2(e){
  e.preventDefault();
  if (e.targetTouches.length == 1) { 
    var touch = e.targetTouches[0]; 
    MouseMove2(touch);
  }
}

function TouchStart2(e){
  if (e.targetTouches.length == 1) { 
    var touch = e.targetTouches[0]; 
    MouseDown2(touch);
  }
}

function TouchEnd2(e){
  if (e.targetTouches.length == 1) { 
    var touch = e.targetTouches[0]; 
    MouseUp2(touch);
  }
}
function posicionY(obj) {
  var valor = obj.offsetTop;
  if (obj.offsetParent) valor += posicionY(obj.offsetParent);
  return valor;
}
function posicionX(obj) {
  var valor = obj.offsetLeft;
  if (obj.offsetParent) valor += posicionX(obj.offsetParent);
  return valor;
}
/* Limpiar pizarra */
function LimpiarTrazado2(){   
  contexto2=document.getElementById(idcanvas2).getContext('2d');
  contexto2.fillStyle=colorDeFondo;
  contexto2.fillRect(0,0,anchocanvas2,altocanvas2);
  img = document.getElementById("suv");
  contexto2.drawImage(img, 0, 0);
}
function imp2(){   
 return document.getElementById(idcanvas2).toDataURL('image/png');
}
function b64img2() 
{
  document.getElementById("myText2").value = imp2();
}