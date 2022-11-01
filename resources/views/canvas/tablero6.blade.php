<canvas id='canvas6' width="384" height="430" style='border: 1px solid #CCC;'>
    <p>Tu navegador no soporta canvas</p>
</canvas>
<img id="pdi" src="{{ asset('img/pdi.png') }}" width="0" height="0" alt="pdi">
<!-- creamos el form para el envio -->

@csrf
    <br>
	<button  class="btn btn-primary mh-100" type='button' onclick='LimpiarTrazado6()'>Borrar</button>
    <input type='hidden' name='imagen6' id='imagen6' />
<script src="js/paintcarrito3.js"></script>