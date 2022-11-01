
<!-- creamos el camvas -->
<canvas id='canvas' width="318" height="332" style='border: 1px solid #CCC;'>
    <p>Tu navegador no soporta canvas</p>
</canvas>
<img id="sedan" src="{{ asset('img/sedan.png') }}" width="0" height="0" alt="sedan">
<!-- creamos el form para el envio -->

@csrf
    <br>
	<button class="btn btn-primary mh-100" type='button' onclick='LimpiarTrazado()'>Borrar</button>
    <input type='hidden' name='imagen' id='imagen' />
<script src="js/paintcarrito.js"></script>