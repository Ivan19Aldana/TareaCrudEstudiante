<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;


class EstudianteController extends Controller
{
    //LISTADO DE ESTUDIANTES
    public function listado(){
        $data['estudiantes']=Estudiante::paginate(3);
        return view('Estudiante.lista',$data);
    }

    //FORMULARIO CREAR ESTUDIANTES
    public function Estudianteform(){
        return view('Estudiante.Estudianteform');
    }

    //GUARDAR NUEVO ESTUDIANTES
    public function save(Request $request){
        $validator=$this->validate($request,[
            'nombre'=>'required',
            'email'=>'required|email|unique:Estudiante',
            'edad'=>'required',
            'direccion'=>'required'
        ]);
        $userdata = request()->except('_token');
        Estudiante::insert($userdata);
        return back() ->with('estudianteguardado', 'Estudiante guardado con exito');
    }
}
