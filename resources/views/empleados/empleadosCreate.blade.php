Seccion para crear empleaods


<form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@include('empleados.empleadosForm',['Modo'=>'crear'])



</form>
