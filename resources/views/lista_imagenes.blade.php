@extends('layouts.header')

@section('content')  
<h1 class="text-center">Lista de imagenes</h1>

<br>
<hr>

<a class="btn"  style="background-color: black " href="{{ route('altaimagenes')}}" role="button"><p class="text-white ">REGISTRAR IMAGENES</p></a>

<hr>
<table class="table table-striped table-hover  " class="ta" >
    <tr class="text-dark" style="background-color: black ">
        <td class="text-white ">ID de imagen</td>
        <td class="text-white ">Imagen</td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
      

        </tr>
        @foreach($imagenes1 as $imagenes)
        <tr>
            <td>{{ $imagenes->id_imagenes }}</td>
            <td>{{ $imagenes->imagen }}</td>
            <td><img src="{{ asset('archivos/'.$imagenes->imagen) }}" style="width:50px"></td>
            >
           
            
            <td>
            <a class="btn" style="background-color: gray" href="{{ route('detalleimagenes',['id_imagenes' => $imagenes->id_imagenes]) }}" role="button">Detalle</a>
            </td>
            <td>
            <a class="btn" style="background-color: green " href="{{ route('editarimagenes',['id_imagenes' => $imagenes->id_imagenes]) }}" role="button">Editar</a>
            </td>
            <td>
            <a class="btn" style="background-color: red" 
            href="{{ route('borrarimagenes',['id_imagenes' => $imagenes->id_imagenes]) }}" 
            onclick="return confirm('Se requiere confirmar su accion!!!')">
            Eliminar</a>
            </td>   


            </tr>
        
            @endforeach
        <tr class="text-white " style="background-color:black ">
        <td class="text-white ">ID de imagen</td>
        <td class="text-white ">Imagen</td>
        <td>    </td>
        <td>    </td>
        <td>    </td>
        
        </tr>
</table>


@endsection
