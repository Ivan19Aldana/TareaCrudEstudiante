<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea No.1 Ivan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>

<!-- Image and text-->
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand"  href="{{url('/LISTADO')}}">
        <i class="fas fa-table"></i> LISTA DE ESTUDIANTES
    </a>

    <a class="navbar-brand float-left" href="{{url('/CREAR')}}">
        <i class="fas fa-user-edit"></i> INSCRIBIR ESTUDIANTE
    </a>

    <a class="navbar-brand float-left" href="{{url('/LISTADO_JORNADA')}}">
        <i class="fas fa-calendar-check"></i> LISTA JORNADA
    </a>





</nav>

<div class="container">
    @yield('content')
</div>


<script src="{{asset('js/app.js')}}"></script>
@yield('candyalert')
</body>
</html>
