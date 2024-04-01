@extends('layouts.header')

@section('content')
  

<h1 class="text-center">Formulario para Editar Doctor</h1>
<hr>
<br>
<center>
<form class="row g-3"  action="{{ route('actualizarDoctor', $doctor->id_doctor) }}" method="POST" enctype="multipart/from-data">
    @csrf
    @method('PUT')
    <div class="col-4">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" name="nombre" value="{{ $doctor->nombre }}">
    </div>
    <div class="col-4">
    <label for="ap_pat" class="form-label">Apellido Paterno</label>
    <input type="text" name="ap_pat" value="{{ $doctor->ap_pat }}">
    </div>
    <div class="col-4">
    <label for="ap_mat" class="form-label">Apellido Materno</label>
    <input type="text" name="ap_mat" value="{{ $doctor->ap_mat }}">
    </div>
    <div class="col-4">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" name="telefono" value="{{ $doctor->telefono }}">
    </div>
    <div class="col-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" value="{{ $doctor->email }}">
    </div>
    <div class="col-4">
    <label for="password" class="form-label">Password</label>

    <input type="password" name="password" value="{{$doctor->password}}">
    </div>
    <div class="col-12 text-center">
    <input class="btn" style="background-color: #B1A4E8 " type="submit" value="Guardar registro">
<a href="{{ route('lista_doctor') }}">
    <button class="btn" style="background-color: #B1A4E8 " type="button">Regresar</button>
</a>
</div>
</form>
</center>
                     

@endsection