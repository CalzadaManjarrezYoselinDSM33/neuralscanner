@extends('layouts.header')

@section('content')  
<h1 class="text-center">Lista de Doctores</h1>

<br>
<hr>

<a class="btn"  style="background-color: black " href="{{ route('altadoctor')}}" role="button"><p class="text-white " >REGISTRAR DOCTOR</p></a>

<hr>
<table class="table table-striped table-hover  " class="ta" >
    <tr class="text-dark" style="background-color: black ">
        <td class="text-white ">ID de Doctor</td>
        <td class="text-white ">Nombre Doctor</td>
        <td class="text-white ">Apellido Paterno</td>
        <td class="text-white ">Apellido Materno</td>
        <td class="text-white ">Telefono</td>
        <td class="text-white ">Email</td>
        <td class="text-white ">Password</td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
      

        </tr>
        @foreach($doctor1 as $doctor)
        <tr>
            <td>{{ $doctor->id_doctor }}</td>
            <td>{{ $doctor->nombre }}</td>
            <td>{{ $doctor->ap_pat }}</td>
            <td>{{ $doctor->ap_mat }}</td>
            <td>{{ $doctor->telefono }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->password }}</td>
           
            
            <td>
            <a class="btn" style="background-color: gray" href="{{ route('detalledoctor',['id_doctor' => $doctor->id_doctor]) }}" role="button">Detalle</a>
            </td>
            <td>
            <a class="btn" style="background-color: green " href="{{ route('editardoctor',['id_doctor' => $doctor->id_doctor]) }}" role="button">Editar</a>
            </td>
            <td>
            <a class="btn" style="background-color: red" 
            href="{{ route('borrardoctor',['id_doctor' => $doctor->id_doctor]) }}" 
            onclick="return confirm('Se requiere confirmar su accion!!!')">
            Eliminar</a>
            </td>   


            </tr>
        
            @endforeach
        <tr class="text-dark" style="background-color:black ">
        <td class="text-white ">ID de Doctor</td>
        <td class="text-white ">Nombre Doctor</td>
        <td class="text-white ">Apellido Paterno</td>
        <td class="text-white ">Apellido Materno</td>
        <td class="text-white ">Telefono</td>
        <td class="text-white ">Email</td>
        <td class="text-white ">Password</td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        
        </tr>
</table>


@endsection
