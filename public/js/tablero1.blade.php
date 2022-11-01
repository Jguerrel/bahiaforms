
<!-- creamos el camvas -->
<canvas id='canvas' width="318" height="332" style='border: 1px solid #CCC;'>
    <p>Tu navegador no soporta canvas</p>
</canvas>
<img id="sedan" src="{{ asset('img/sedan.png') }}" width="0" height="0" alt="sedan">
<!-- creamos el form para el envio -->

@csrf
	<button type='button' onclick='LimpiarTrazado()'>Borrar</button>
    <button type='button' onclick="myFunction()">imp</button>
    <input type='hidden' name='imagen' id='imagen' />
    <p id="demo"></p>
    
<script type="text/javascript">
    /* Variables de Configuracion */
    var idCanvas='canvas';
    var idForm='formCanvas';
    var inputImagen='imagen';
    var estiloDelCursor='crosshair';
    var colorDelTrazo='red';
    var colorDeFondo='#fff';
    var grosorDelTrazo=2;

    /* Variables necesarias */
    var contexto=null;
    var valX=0;
    var valY=0;
    var flag=false;
    var imagen=document.getElementById(inputImagen); 
    var anchoCanvas=document.getElementById(idCanvas).offsetWidth;
    var altoCanvas=document.getElementById(idCanvas).offsetHeight;
    var pizarraCanvas=document.getElementById(idCanvas);
    var imgreal=""
    /* Esperamos el evento load */
    window.addEventListener('load',IniciarDibujo,false);
	
    window.onload = function () {
		LimpiarTrazado()}

    function IniciarDibujo(){
      /* Creamos la pizarra */
      pizarraCanvas.style.cursor=estiloDelCursor;
      contexto=pizarraCanvas.getContext('2d');
      contexto.fillStyle=colorDeFondo;
      contexto.fillRect(0,0,anchoCanvas,altoCanvas);
      contexto.strokeStyle=colorDelTrazo;
      contexto.lineWidth=grosorDelTrazo;
      contexto.lineJoin='round';
      contexto.lineCap='round';
      /* Capturamos los diferentes eventos */
      pizarraCanvas.addEventListener('mousedown',MouseDown,false);// Click pc
      pizarraCanvas.addEventListener('mouseup',MouseUp,false);// fin click pc
      pizarraCanvas.addEventListener('mousemove',MouseMove,false);// arrastrar pc

      pizarraCanvas.addEventListener('touchstart',TouchStart,false);// tocar pantalla tactil
      pizarraCanvas.addEventListener('touchmove',TouchMove,false);// arrastras pantalla tactil
      pizarraCanvas.addEventListener('touchend',TouchEnd,false);// fin tocar pantalla dentro de la pizarra
      pizarraCanvas.addEventListener('touchleave',TouchEnd,false);// fin tocar pantalla fuera de la pizarra
    }

    function MouseDown(e){
      flag=true;
      contexto.beginPath();
      valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
      contexto.moveTo(valX,valY);
    }

    function MouseUp(e){
      contexto.closePath();
      flag=false;
    }

    function MouseMove(e){
      if(flag){
        contexto.beginPath();
        contexto.moveTo(valX,valY);
        valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
        contexto.lineTo(valX,valY);
        contexto.closePath();
        contexto.stroke();
      }
    }

    function TouchMove(e){
      e.preventDefault();
      if (e.targetTouches.length == 1) { 
        var touch = e.targetTouches[0]; 
        MouseMove(touch);
      }
    }

    function TouchStart(e){
      if (e.targetTouches.length == 1) { 
        var touch = e.targetTouches[0]; 
        MouseDown(touch);
      }
    }

    function TouchEnd(e){
      if (e.targetTouches.length == 1) { 
        var touch = e.targetTouches[0]; 
        MouseUp(touch);
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
    function LimpiarTrazado(){   
      contexto=document.getElementById(idCanvas).getContext('2d');
      contexto.fillStyle=colorDeFondo;
      contexto.fillRect(0,0,anchoCanvas,altoCanvas);
	  img = document.getElementById("sedan");
	  contexto.drawImage(img, 0, 0);
    }
    function imp(){   
     return document.getElementById(idCanvas).toDataURL('image/png');
    }
    /* Enviar el trazado */
    function GuardarTrazado(){
        imagen.value=document.getElementById(idCanvas).toDataURL('image/png');
        document.forms[idForm].submit(); 
    }
    function myFunction() 
    {
      document.getElementById("myText").value = imp();
    }
</script>