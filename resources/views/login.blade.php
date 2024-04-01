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

        
       
        <div class="container">
								<div class="row">
        <h1  class="col-9 text-center text-white ">LOGIN </h1>
        <td> </td>
        <td> </td>

        

</div>
</div>
<h2><a  class="btn btn-black"   href="{{ route('/')}}" role="button" ><p class="text-white "> IR A INICIO</p></a></h2> 

<div> 
  <a href=""></a>
</div>
</nav>
 <?php
 $session_id =session('session_id') ;
 $session_name =session('session_name') ;
 ?>  
 
 <h1> Hola!, bienvenido <?php echo " ".$session_name; ?></h1>
 
 
 <hr>
 <form class="row g-2" action ="{{route('valida')}}"method="POST">
    {{csrf_field()}}
    
    <div class="col-4 ">
    <label for="no_control" class="form-label">Email: </label>
    <input type ="text" name="email" id="email" placeholder="Email: yoseclzad18@gmail.com" value ="{{old('email')}}"/>
    </div>
    
    <div class="col-4 ">
    <label for="no_control" class="form-label">Password: </label>
    <input type="password" name="password" id="password" placeholder="Password" value=""/>
    </div>
    
    <div class="col-4  ">
    <input  class="btn text-white"  style="background-color: black " type='submit'  value="Ingresar">
    </div>
   
 </form>
</body>
</html>