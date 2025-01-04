<h1>{{ $modo }} empleado</h1>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}" id="nombre">
<br>
<label for="apellidoPaterno">Apellido paterno</label>
<input type="text" name="apellidoPaterno" value="{{ isset($empleado->apellidoPaterno)?$empleado->apellidoPaterno:'' }}" id="apellidoPaterno">
<br>
<label for="apellidoMaterno">Apellido materno</label>
<input type="text" name="apellidoMaterno" value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:'' }}" id="apellidoMaterno">
<br>
<label for="correo">Correo</label>
<input type="text" name="correo" value="{{ isset($empleado->correo)?$empleado->correo:'' }}" id="correo">
<br>
<label for="foto">Foto</label>
@if(isset($empleado->foto))
<img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
@endif
<input type="file" name="foto" value="" id="foto">
<br>
<input type="submit" value="{{ $modo }} datos">

<a href="{{ url('empleado/') }}">Regresar</a>
<br>