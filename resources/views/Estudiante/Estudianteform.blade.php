@extends('Diseño.base')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-6">
                <!--MENSAJE FLASH-->
                @if(session('estudianteguardado'))
                    <div class="alert alert-success">
                        {{ session('estudianteguardado') }}
                    </div>
                @endif

            <!--VALIDACION DE ERRORES-->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <form action="{{route('save')}}" mathod="POST">
                        @csrf
                        <div class="card-header text-center text-white bg-primary">INGRESAR ESTUDIANTE</div>
                        <div class="card-body">

                            <div class=" form-group col-md-12 ">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control " name="nombre" placeholder="Inserte un nombre">
                            </div>

                            <div class=" form-group col-md-12 ">
                                <label for="">Email</label>
                                <input type="text" class="form-control " name="email" placeholder="Ejemplo@gmail.com">
                            </div>

                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Direccion Casa</label>
                                <input type="text" class="form-control" name="direccion"  placeholder="Inserte una direccion">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="">Edad</label>
                                <input type="text" class="form-control" name="edad" placeholder="Edad">
                            </div>
                            </div>

                            <div class="form-row col-md-12">

                                <div class="form-group col-md-6 font-italic">
                                    <label for="">Jornada</label>
                                    <select name="idjornada" class="form-control border border-success">
                                        <option value="" >Seleccione Jornada...</option>
                                        @foreach( $jornada as $jornadas)
                                            <option value="{{$jornadas->idjornada}}"> {{$jornadas->descripcion}}  </option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <div class="row form-group justify-content-center">
                                <button type="submit" class="btn btn-primary col-md-4 mt-3 mr-2 offset"><i class="fas fa-save"></i> INSCRIBIR</button>
                                <a type="button " href="{{ url('/')}}" class="btn btn-danger col-md-4 mt-3 offset float-right"><i class="fas fa-ban"></i> CANCELAR </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
