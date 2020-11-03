@extends('layouts.app')

@section('content')

<div class="container">
    @if (Session::has('Mensaje'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('Mensaje') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif

    <a href="{{ url('empleados/create') }}" class="btn btn-success">Agregar Empleado</a>
    <br/>
    <br/>
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail img-fluid" alt="" width="100">
                </td>
                <td>{{ $empleado->Nombre }} {{ $empleado->ApellidoPaterno }} {{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>

                    <a class="btn btn-warning" href="{{ url('/empleados/'.$empleado->id.'/edit') }}">
                    Editar
                    </a>



                <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" class="d-inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar?');">Borrar</button>
                </form>


                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    {{ $empleados->links() }}

</div>

@endsection
