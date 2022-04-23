@extends('Diseño.base')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-6">
                <!--MENSAJE FLASH-->
                @if(session('jornadateguardado'))
                    <div class="alert alert-success">
                        {{ session('jornadaguardado') }}
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
                    <form action="{{route('save_jornada')}}" mathod="POST">
                        @csrf
                        <div class="card-header text-center text-white bg-primary">INGRESAR JORNADA</div>
                        <div class="card-body">

                            <div class=" form-group col-md-12 ">
                                <label for="">ID</label>
                                <input type="text" class="form-control " name="idjornada" placeholder="">
                            </div>

                            <div class=" form-group col-md-12 ">
                                <label for="">Descripcion</label>
                                <input type="text" class="form-control " name="descripcion" placeholder="">
                            </div>


                            <div class="row form-group justify-content-center">
                                <button type="submit" class="btn btn-primary col-md-4 mt-3 mr-2 offset"><i class="fas fa-save"></i> GUARDAR</button>
                                <a type="button " href="{{ url('/')}}" class="btn btn-danger col-md-4 mt-3 offset float-right"><i class="fas fa-ban"></i> CANCELAR </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
