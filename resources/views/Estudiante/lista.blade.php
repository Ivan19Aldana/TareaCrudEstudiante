@extends('Diseño.base')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-5"> LISTADO DE ESTUDIANTES INSCRITOS </h2>

                <table class="table table-bordered table-strpied text-center">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">EDAD</th>
                        <th scope="col">JORNADA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($estudiantes as $estudiante)
                        <tr>

                            <td class=" border px-4 py-2">{{$estudiante->nombre}}</td>
                            <td class=" border px-4 py-2">{{$estudiante->email}}</td>
                            <td class=" border px-4 py-2">{{$estudiante->direccion}}</td>
                            <td class=" border px-4 py-2">{{$estudiante->edad}}</td>
                            <td class=" border px-4 py-2">{{$estudiante->descripcion}}</td>
                            <td class=" border px-4 py-2">
                                <div class="btn-group flex justify-center  text-lg">
                                    <a href="{{ route('modificar',$estudiante->id)}}" class=" mr-2 btn btn-success">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('delete',$estudiante->id)}}" id="{{$estudiante->id}}"method="POST">
                                        @csrf @method('DELETE')
                                        <button type="button" onclick="borrar_registro({{$estudiante->id}})" class=" btn btn-danger" >
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div
                {{$estudiantes->links()}}

            </div>
        </div>
    </div>
@endsection

@section('candyalert')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function borrar_registro(registro){
            Swal.fire({
                title: 'Se eliminará al estudiante!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(registro).submit()
                    Swal.fire(
                        'Eliminado con exito!',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
