/* Variables de Configuracion */
var idcanvas6='canvas6';
var idForm='formcanvas6';
var inputimagen6='imagen6';
var estiloDelCursor='crosshair';
var colorDelTrazo='red';
var colorDeFondo='#fff';
var grosorDelTrazo=2;

/* Variables necesarias */
var contexto6=null;
var valX6=0;
var valY6=0;
var flag6=false;
var imagen6=document.getElementById(inputimagen6); 
var anchocanvas6=document.getElementById(idcanvas6).offsetWidth;
var altocanvas6=document.getElementById(idcanvas6).offsetHeight;
var pizarracanvas6=document.getElementById(idcanvas6);
var imgreal=""
/* Esperamos el evento load */
window.addEventListener('load',IniciarDibujo6,false);
window.addEventListener('load',LimpiarTrazado6,false);


function IniciarDibujo6(){
  /* Creamos la pizarra */
  pizarracanvas6.style.cursor=estiloDelCursor;
  contexto6=pizarracanvas6.getContext('2d');
  contexto6.fillStyle=colorDeFondo;
  contexto6.fillRect(0,0,anchocanvas6,altocanvas6);
  contexto6.strokeStyle=colorDelTrazo;
  contexto6.lineWidth=grosorDelTrazo;
  contexto6.lineJoin='round';
  contexto6.lineCap='round';
  /* Capturamos los diferentes eventos */
  pizarracanvas6.addEventListener('mousedown',MouseDown6,false);// Click pc
  pizarracanvas6.addEventListener('mouseup',MouseUp6,false);// fin click pc
  pizarracanvas6.addEventListener('mousemove',MouseMove6,false);// arrastrar pc

  pizarracanvas6.addEventListener('touchstart',TouchStart6,false);// tocar pantalla tactil
  pizarracanvas6.addEventListener('touchmove',TouchMove6,false);// arrastras pantalla tactil
  pizarracanvas6.addEventListener('touchend',TouchEnd6,false);// fin tocar pantalla dentro de la pizarra
  pizarracanvas6.addEventListener('touchleave',TouchEnd6,false);// fin tocar pantalla fuera de la pizarra
}

function MouseDown6(e){
  flag6=true;
  contexto6.beginPath();
  valX6=e.pageX-posicionX(pizarracanvas6); valY6=e.pageY-posicionY(pizarracanvas6);
  contexto6.moveTo(valX6,valY6);
}

function MouseUp6(e){
  contexto6.closePath();
  flag6=false;
}

function MouseMove6(e){
  if(flag6){
    contexto6.beginPath();
    contexto6.moveTo(valX6,valY6);
    valX6=e.pageX-posicionX(pizarracanvas6); valY6=e.pageY-posicionY(pizarracanvas6);
    contexto6.lineTo(valX6,valY6);
    contexto6.closePath();
    contexto6.stroke();
  }
}

function TouchMove6(e){
  e.preventDefault();
  if (e.targetTouches.length == 1) { 
    var touch = e.targetTouches[0]; 
    MouseMove6(touch);
  }
}

function TouchStart6(e){
  if (e.targetTouches.length == 1) { 
    var touch = e.targetTouches[0]; 
    MouseDown6(touch);
  }
}

function TouchEnd6(e){
  if (e.targetTouches.length == 1) { 
    var touch = e.targetTouches[0]; 
    MouseUp6(touch);
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
function LimpiarTrazado6(){   
  contexto6=document.getElementById(idcanvas6).getContext('2d');
  contexto6.fillStyle=colorDeFondo;
  contexto6.fillRect(0,0,anchocanvas6,altocanvas6);
  img = document.getElementById("pdi");
  contexto6.drawImage(img, 0, 0);
}
function imp6(){   
 return document.getElementById(idcanvas6).toDataURL('image/png');
}
function b64img6() 
{
  document.getElementById("myText6").value = imp6();
}