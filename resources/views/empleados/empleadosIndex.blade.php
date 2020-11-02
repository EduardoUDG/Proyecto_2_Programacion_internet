Inicio (Despliegue de datos)

<a href="{{ url('empleados/create') }}">Agregar Empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="200">
            </td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>

                <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">
                Editar
                </a>

                |

            <form action="{{ url('/empleados/'.$empleado->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>


            </td>
        </tr>
    @endforeach
    </tbody>

</table>
