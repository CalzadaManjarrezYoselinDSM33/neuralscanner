@extends('layouts.header')

@section('content')  
<h1 class="text-center">Lista de Pacientes</h1>

<br>
<hr>

<a class="btn"  style="background-color: black " href="{{ route('altapaciente')}}" role="button"><p class="text-white ">REGISTRAR PACIENTE</p></a>

<hr>
<table class="table table-striped table-hover  " class="ta" >
    <tr class="text-dark" style="background-color: black ">
        <td class="text-white ">ID de Paciente</td>
        <td class="text-white ">Nombre Paciente</td>
        <td class="text-white ">Apellido Paterno</td>
        <td class="text-white ">Apellido Materno</td>
        <td class="text-white ">Edad</td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
      

        </tr>
        @foreach($paciente1 as $paciente)
        <tr>
            <td>{{ $paciente->id_paciente }}</td>
            <td>{{ $paciente->nombre }}</td>
            <td>{{ $paciente->ap_paciente }}</td>
            <td>{{ $paciente->am_paciente }}</td>
            <td>{{ $paciente->edad }}</td>
           
            
            <td>
            <a class="btn" style="background-color: gray" href="{{ route('detallepaciente',['id_paciente' => $paciente->id_paciente]) }}" role="button">Detalle</a>
            </td>
            <td>
            <a class="btn" style="background-color: green " href="{{ route('editarpaciente',['id_paciente' => $paciente->id_paciente]) }}" role="button">Editar</a>
            </td>
            <td>
            <a class="btn" style="background-color: red" 
            href="{{ route('borrarpaciente',['id_paciente' => $paciente->id_paciente]) }}" 
            onclick="return confirm('Se requiere confirmar su accion!!!')">
            Eliminar</a>
            </td>   


            </tr>
        
            @endforeach
        <tr class="text-dark" style="background-color:black ">
        <td class="text-white ">ID de Paciente</td>
        <td class="text-white ">Nombre Paciente</td>
        <td class="text-white ">Apellido Paterno</td>
        <td class="text-white ">Apellido Materno</td>
        <td class="text-white ">Edad</td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        
        </tr>
</table>


@endsection
