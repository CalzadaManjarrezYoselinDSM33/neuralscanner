@extends('layouts.header')

@section('content')

<center>
        <hr>
        <h1 class="text-center">Detalles de doctor</h1>
        <hr>
       
        <h3>Nombre: {{ $detalle->ap_pat . '   ' . $detalle->ap_mat . '  '. $detalle->nombre }}</h3>
        <b>Email: </b>{{ $detalle->email}} <br>
        <b>Contraseña: </b>{{ $detalle->password}} <br>
        <hr><br>
        <a href="{{ route('lista_doctor')}}"><button class="btn" style="background-color: #B1A4E8 "> Regresar</button></a>
</center>




@endsection