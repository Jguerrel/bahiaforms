<!-- creamos el camvas -->
<canvas id='canvas2' width="305" height="335" style='border: 1px solid #CCC;'>
    <p>Tu navegador no soporta canvas</p>
</canvas>
<img id="suv" src="{{ asset('img/suv.png') }}" width="0" height="0" alt="suv">
<!-- creamos el form para el envio -->

@csrf
    <br>
	<button  class="btn btn-primary mh-100" type='button' onclick='LimpiarTrazado2()'>Borrar</button>
    <input type='hidden' name='imagen2' id='imagen2' />
<script src="js/paintcarrito2.js"></script>