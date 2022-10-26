<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        canvas {
            border: 0px solid black;
            width: 318px;
            height: 332px;
            background-color: white;
        }
        body { 
            padding: 0px;
            margin: 0px;
            width: 318px;
            height: 332px;
        }

   
    </style>
    
    <canvas id="pizarra" ></canvas>
    <img id="sedan" src="{{ asset('img/sedan.png') }}" width="0" height="0" alt="sedan">
    
    <!--<br> <button id="btnDescargar">Descargar</button>-->
    <script>

        //======================================================================
        // VARIABLES
        //======================================================================
        let miCanvas = document.querySelector('#pizarra');//,
            //$btnDescargar = document.querySelector("#btnDescargar");
        let lineas = [];
        let correccionX = 0;
        let correccionY = 0;
        let pintarLinea = false;
        // Marca el nuevo punto
        let nuevaPosicionX = 0;
        let nuevaPosicionY = 0;

        let posicion = miCanvas.getBoundingClientRect()
        correccionX = posicion.x;
        correccionY = posicion.y;

        miCanvas.width = 318;
        miCanvas.height = 332;

      /** $btnDescargar.onclick = () => {
           const enlace = document.createElement('a');
           // El título
           enlace.download = "Firma.png";
           // Convertir la imagen a Base64 y ponerlo en el enlace
           enlace.href = miCanvas.toDataURL();
           console.log(enlace.href);
           // Hacer click en él
          enlace.click();
        };
        */  
       
        //======================================================================
        // FUNCIONES
        //======================================================================

        /**
         * Funcion que empieza a dibujar la linea
         */
        function empezarDibujo() {
            pintarLinea = true;
            lineas.push([]);
        };

        /**
         * Funcion que guarda la posicion de la nueva línea
         */
        function guardarLinea() {
            lineas[lineas.length - 1].push({
                x: nuevaPosicionX,
                y: nuevaPosicionY
            });
        }

        /**
         * Funcion dibuja la linea
         */

        window.onload = function () {
            ctx = miCanvas.getContext('2d')
            ctx.fillStyle = "White";
            ctx.fillRect(1, 1, 318, 500);
            img = document.getElementById("sedan");
            ctx.drawImage(img, 0, 0);
        }

        function dibujarLinea(event) {
            event.preventDefault();
            if (pintarLinea) {
                let ctx = miCanvas.getContext('2d')
                // Estilos de linea
                ctx.lineJoin = ctx.lineCap = 'round';
                ctx.lineWidth = 2;
                // Color de la linea
                ctx.strokeStyle = 'red';
                // Marca el nuevo punto
                if (event.changedTouches == undefined) {
                    // Versión ratón
                    nuevaPosicionX = event.layerX;
                    nuevaPosicionY = event.layerY;
                } else {
                    // Versión touch, pantalla tactil
                    nuevaPosicionX = event.changedTouches[0].pageX - correccionX;
                    nuevaPosicionY = event.changedTouches[0].pageY - correccionY;
                }
                // Guarda la linea
                guardarLinea();
                // Redibuja todas las lineas guardadas
                ctx.beginPath();
                lineas.forEach(function (segmento) {
                    ctx.moveTo(segmento[0].x, segmento[0].y);
                    segmento.forEach(function (punto, index) {
                        ctx.lineTo(punto.x, punto.y);
                    });
                });
                ctx.stroke();
            }
        }

        /**
         * Funcion que deja de dibujar la linea
         */
        function pararDibujar() {
            pintarLinea = false;
            guardarLinea();
        }

        //======================================================================
        // EVENTOS
        //======================================================================

        // Eventos raton
        miCanvas.addEventListener('mousedown', empezarDibujo, false);
        miCanvas.addEventListener('mousemove', dibujarLinea, false);
        miCanvas.addEventListener('mouseup', pararDibujar, false);

        // Eventos pantallas táctiles
        miCanvas.addEventListener('touchstart', empezarDibujo, false);
        miCanvas.addEventListener('touchmove', dibujarLinea, false);

    </script>

</body>

</html>