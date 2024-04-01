@extends('layouts.header')

@section('content')
  

<h1 class="text-center">Formulario para Editar imagenes</h1>
<hr>
<br>
<center>
<form class="row g-3" action="{{ route('salvarimagenes',['id_imagenes' => $imagenes->id_imagenes]) }}"  method="POST" enctype="multipart/from-data" >
   {{ csrf_field() }}      
   {{ method_field('PUT') }}                
   <div class="col-md-7">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" name='imagen' class="form-control" placeholder="Ingresa el nombre de la imagen, con la extencion (jpg, png, jpeg, etc.)" >
</div>


<hr>
<br><br><br><br>
<div class="col-12 text-center">
<input class="btn" style="background-color: #B1A4E8 " type="submit" value="Guardar registro">
<a href="{{ route('lista_imagenes') }}">
    <button class="btn" style="background-color: #B1A4E8 " type="button">Regresar</button>
</a>
</div>

</form>
</center>
                     

@endsection