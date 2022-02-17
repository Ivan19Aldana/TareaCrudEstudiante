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
    public function estudiform(){
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

    //FORMULARIO PARA EDITAR ESTUDIANTES
    public function modificar($id){
        $estudiante=Estudiante::findorfail($id);
        return view('Estudiante.editform', compact('estudiante'));
    }

    //EDITAR ESTUDIANTES
    public function edit(Request $request,$id){
        $datosestudiante=request()->except((['_token','_method']));
        Estudiante::where('id','=', $id)->update($datosestudiante);
        return back() ->with('estudiantemodificado', 'Estudiante modificado con exito');
    }
//ELIMINAR ESTUDIANTES
    public function delete($id){
        Estudiante::destroy($id);
        return back() ->with('estudianteguardado', 'Estudiante guardado con exito');
    }

}
