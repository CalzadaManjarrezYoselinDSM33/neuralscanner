@extends('layouts.header')

@section('content')

<center>
        <hr>
        <h1 class="text-center">Detalles de paciente</h1>
        <hr>
        <h3>Nombre: {{ $detalle->ap_paciente . '   ' . $detalle->am_paciente . '  '. $detalle->nombre }}</h3>
        <hr><br>
        <a href="{{ route('lista_paciente')}}"><button class="btn" style="background-color: #B1A4E8 "> Regresar</button></a>
</center>




@endsection