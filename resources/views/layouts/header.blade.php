<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
</head>
<body >

<nav class="navbar navbar-expand-lg" style="background-color: black  ">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <img src="{{ asset('archivos/security.jpg')}}" alt="UTVT" width="250"height="100">
        

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link" href="{{ route('lista_paciente')}}"><p class="text-white ">LISTA PACIENTE</p></a>
        </li>
      
      <li class="nav-item">
          <a class="nav-link" href="{{ route('lista_doctor')}}"><p class="text-white ">LISTA DOCTOR</p></a>
        </li>
            
        <!-- <li class="nav-item">
          <img src="{{ asset('archivos/cuervo.jpg') }}" alt="CUERVO_UTVT" width="300" heigt="75">
        </li> -->
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('lista_imagenes')}}"><p class="text-white ">LISTA IMAGENES</p></a>
        </li>
        
        
      </ul>
      <div class="text-white ">
     <p>
     <?php
 $session_id =session('session_id') ;
 $session_name =session('session_name') ;
 ?>
      <h4>Hola! <?php echo " ".$session_name; ?></h4></p>
      </div>
      <br>
      
      <a  class="btn btn-gray"   href="{{ route('login')}}"  ><p class="text-white "> CERRAR SESION</p></a>
      
    </div>
  </div>
</nav>
<hr>
<br>




@yield('content') 

 




</body>
</html>