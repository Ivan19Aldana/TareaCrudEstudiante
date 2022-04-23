@extends('Diseño.base')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-5"> LISTADO DE JORNADAS </h2>
                <a type="button " href="{{ url('/CREAR_JORNADA')}}" class="btn btn-success mb-3 mt-3 mr-2 md-3 offset float-left"><i class="fas fa-plus"></i> NUEVO </a>
                <table class="table table-bordered table-strpied text-center">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">OPCIONES</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($jornada as $jornadas)
                        <tr>

                            <td class=" border px-4 py-2">{{$jornadas->idjornada}}</td>
                            <td class=" border px-4 py-2">{{$jornadas->descripcion}}</td>

                            <td class=" border px-4 py-2">
                                <div class="btn-group flex justify-center  text-lg">
                                    <form action="{{ route('delete_jornada',$jornadas->idjornada)}}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" onclick="return confirm('Eliminar registro de jornada');" class=" btn btn-danger" >
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
                {{$jornada->links()}}

            </div>
        </div>
    </div>
@endsection
