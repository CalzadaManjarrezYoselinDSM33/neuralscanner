@extends('layouts.header')

@section('content')
  

<h1 class="text-center">Formulario para registrar doctor</h1>
<hr>
<br>
<form class="row g-3" action="{{ route('registrardoctor')}}"  method="POST" enctype="multipart/form-data" >
   {{ csrf_field() }}                      

<div class="col-4">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" name='nombre' class="form-control" value="{{ old('nombre') }}" placeholder="Escribe tu Nombre(s)">
</div>
<div class="col-4">
    <label for="ap_pat" class="form-label">Apellido Paterno</label>
    <input type="text" name='ap_pat' class="form-control" value="{{ old('ap_pat') }}" placeholder="Escribe Apellido Paterno">
</div>
<div class="col-4">
    <label for="ap_mat" class="form-label">Apellido Materno</label>
  <input type="text" name='ap_mat' class="form-control" value="{{ old('ap_mat') }}" placeholder="Escribir Apellido Materno">
</div>

<div class="col-4">
    <label for="telefono" class="form-label">Telefono</label>
  <input type="text" name='telefono' class="form-control" value="{{ old('telefono') }}" placeholder="Escribir Telefono">
</div>


<div class="col-md-6">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name='email' class="form-control" value="{{ old('email') }}" placeholder="example123@gmail.com">
</div>
<div class="col-md-6">
    <label for="password" class="form-label">Contraseña</label>
    <input type="text" name='password' class="form-control" value="{{ old('password') }}" placeholder="Escribe una contraseña ">
</div>
<br><br><br><br><br>
<hr>
<div class="col-6 text-center">
    <button type="submit" class="btn" style="background-color: #B1A4E8 ">Registrar</button>
</div>
<div class="col-6 text-center">
<a class="btn" style="background-color: #B1A4E8 " href="{{ route('lista_doctor')}}" role="button">Regresar</a>
</div>
</form>
                     

@endsection