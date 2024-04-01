@extends('layouts.header')

@section('content')
  

<h1 class="text-center">Formulario para Editar paciente</h1>
<hr>
<br>
<center>
<form class="row g-3" action="{{ route('salvarpaciente',['id_paciente' => $paciente->id_paciente]) }}"  method="POST" enctype="multipart/from-data" >
   {{ csrf_field() }}      
   {{ method_field('PUT') }}                
   <div class="col-4">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" name='nombre' class="form-control" value="{{ old('nombre', $paciente->nombre) }}"  placeholder="Escribe tu Nombre(s)">
</div>
<div class="col-4">
    <label for="ap_paciente" class="form-label">Apellido Paterno</label>
    <input type="text" name='ap_paciente' class="form-control" value="{{ old('ap_paciente', $paciente->ap_paciente) }}" placeholder="Escribe Apellido Paterno">
</div>
<div class="col-4">
    <label for="am_paciente" class="form-label">Apellido Materno</label>
  <input type="text" name='am_paciente' class="form-control" value="{{ old('am_paciente', $paciente->am_paciente) }}" placeholder="Escribir Apellido Materno">
</div>

<div class="col-4">
    <label for="edad" class="form-label">Edad</label>
  <input type="text" name='edad' class="form-control" value="{{ old('edad', $paciente->edad) }}" placeholder="Escribir Edad">
</div>


<hr>
<br><br><br><br>

    <div class="col-12 text-center">
    <input class="btn" style="background-color: #B1A4E8 " type="submit" value="Guardar registro">
<a href="{{ route('lista_paciente') }}">
    <button class="btn" style="background-color: #B1A4E8 " type="button">Regresar</button>
</a>
</div>


</form>
</center>
                     

@endsection