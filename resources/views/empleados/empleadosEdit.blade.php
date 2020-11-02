Seccion para editar empleados

<form action="" method="post">

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">
<br/>


<label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}">
<br/>


<label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}">
<br/>


<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="{{ $empleado->Correo }}">
<br/>


<label for="Foto">{{'Foto'}}</label>
<br/>
{{ $empleado->Foto }}
<br/>
<input type="file" name="Foto" id="Foto" value="">
<br/>

</form>
