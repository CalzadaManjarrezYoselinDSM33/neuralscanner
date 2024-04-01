<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.head')
</head>
<body onload="sinvueltaatras();" onpageshow="if (event.persisted) sinvueltaatras();" onunload="">
@include('layout.navbar')
<div class="container">
    <br>
    @yield('content')
    <br><br>

</div>
   @include('layout.footer') 
</body>
</html>