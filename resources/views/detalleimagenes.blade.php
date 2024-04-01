@extends('layouts.header')

@section('content')

<center>
        <hr>
        <h1 class="text-center">Detalles de Imagen</h1>
        <hr>
        <img src="{{ asset('archivos/imagenes/'.$detalle->imagen)}}" style="width:100px" ><br>
        <hr><br>
        <a href="{{ route('lista_imagenes')}}"><button class="btn" style="background-color: #B1A4E8 "> Regresar</button></a>
</center>




@endsection