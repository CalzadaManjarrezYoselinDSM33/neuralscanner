@extends('layouts.header')

@section('content')
  

<h1 class="text-center">Formulario para registrar imagenes</h1>
<hr>
<br>
<form class="row g-3" action="{{ route('registrar')}}"  method="POST" enctype="multipart/form-data" >
   {{ csrf_field() }}                      


<div class="col-md-7">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" name='imagen' class="form-control" placeholder="Ingresa el nombre de la fot, con la extencion (jpg, png, jpeg, etc.)" >
</div>


<br><br><br><br><br>
<hr>
<div class="col-6 text-center">
    <button type="submit" class="btn" style="background-color: #B1A4E8 ">Registrar</button>
</div>
<div class="col-6 text-center">
<a class="btn" style="background-color: #B1A4E8 " href="{{ route('lista_imagenes')}}" role="button">Regresar</a>
</div>
</form>
                     

@endsection