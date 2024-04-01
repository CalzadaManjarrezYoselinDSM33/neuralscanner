@extends('layouts.header')

@section('content')
  

<h1 class="text-center">Formulario para registrar pacientes</h1>
<hr>
<br>
<form class="row g-3" action="{{ route('registrar')}}"  method="POST" enctype="multipart/form-data" >
   {{ csrf_field() }}                      

<div class="col-4">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" name='nombre' class="form-control" value="{{ old('nombre') }}" placeholder="Escribe tu Nombre(s)">
</div>
<div class="col-4">
    <label for="ap_paciente" class="form-label">Apellido Paterno</label>
    <input type="text" name='ap_paciente' class="form-control" value="{{ old('ap_paciente') }}" placeholder="Escribe Apellido Paterno">
</div>
<div class="col-4">
    <label for="am_paciente" class="form-label">Apellido Materno</label>
  <input type="text" name='am_paciente' class="form-control" value="{{ old('am_paciente') }}" placeholder="Escribir Apellido Materno">
</div>

<div class="col-4">
    <label for="edad" class="form-label">Edad</label>
  <input type="text" name='edad' class="form-control" value="{{ old('edad') }}" placeholder="Escribir Edad">
</div>


<br><br><br><br><br>
<hr>
<div class="col-6 text-center">
    <button type="submit" class="btn" style="background-color: #B1A4E8 ">Registrar</button>
</div>
<div class="col-6 text-center">
<a class="btn" style="background-color: #B1A4E8 " href="{{ route('lista_paciente')}}" role="button">Regresar</a>
</div>
</form>
                     

@endsection