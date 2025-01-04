Mostrar la lista de empleados

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('empleado/create') }}">Registrar nuevo empleado</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>
            <img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">

            </td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellidoPaterno }}</td>
            <td>{{ $empleado->apellidoMaterno }}</td>
            <td>{{ $empleado->correo }}</td>
            <td><a href="{{ url('/empleado/'.$empleado->id.'/edit')}}">Editar</a>| 
                
            <form action="{{ url('/empleado/'.$empleado->id)}}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

            </form></td>
        </tr>
        @endforeach
    </tbody>

</table>