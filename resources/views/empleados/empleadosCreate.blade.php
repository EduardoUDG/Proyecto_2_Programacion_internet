@extends('layouts.app')

@section('content')

<div class="container">
Seccion para crear empleados

<form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">

{{ csrf_field() }}
@include('empleados.empleadosForm',['Modo'=>'crear'])

</form>
</div>

@endsection
