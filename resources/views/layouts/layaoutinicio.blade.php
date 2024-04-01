<!DOCTYPE html>
<html class>
    <head>
        <!-- METADATOS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Las 3 metaetiquetas anteriores *deben* aparecer primero en el encabezado; cualquier otro contenido principal debe venir *después* de estas etiquetas -->		
		
<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
  
        <!--familia-de-fuentes-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>

        <!-- para título img -->
		
		
		
        <link rel="stylesheet" href="{{asset('/css/hover-min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
		<link href="{{asset('/css/owl.theme.default.min.css')}}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
		<link href="{{asset('/css/bootsnav.css')}}" rel="stylesheet"/>	
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">

    </head>
    <body class="">
    <nav class="navbar navbar-expand-lg" style="background-color: gray  ">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
    
        
        <img src="{{ asset('archivos/security.jpg')}}" alt="UTVT" width="150"height="100">
        
       
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        
        <div class="container">
            
								<div class="row">
        <h1  class="col-12 text-center">NEURAL-SCANNER</h1>
        

</div>
</div>
</ul>


        </nav>
        
    </body>
	
	





@yield('content') 

 





</html>