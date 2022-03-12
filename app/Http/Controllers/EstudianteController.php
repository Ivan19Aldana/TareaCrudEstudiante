<?php

namespace App\Http\Controllers;
use App\Models\Jornada;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;
use Illuminate\Http\Request;


class EstudianteController extends Controller
{
    //LISTADO DE ESTUDIANTES
    public function listado(){

        $estudiantes = DB::table('estudiante')
            ->join('jornada', 'estudiante.idjornada', '=', 'jornada.idjornada')
            ->select('estudiante.*', 'jornada.descripcion')
            ->paginate(10);

        return view('Estudiante.lista', compact('estudiantes'));
    }

    //FORMULARIO CREAR ESTUDIANTES
    public function estudiform(){
        $jornada= Jornada::all();
        return view('Estudiante.Estudianteform',compact('jornada'));
    }

    //GUARDAR NUEVO ESTUDIANTES
    public function save(Request $request){
        $validator=$this->validate($request,[
            'nombre'=>'required',
            'email'=>'required|email|unique:Estudiante',
            'edad'=>'required',
            'direccion'=>'required',
              'idjornada'=>'required',
        ]);

        Estudiante::create([
            'nombre' =>$validator['nombre'],
            'email'=>$validator['email'],
            'edad'=>$validator['edad'],
            'direccion'=>$validator['direccion'],
            'idjornada'=>$validator['idjornada'],
        ]);

        return back() ->with('estudianteguardado', 'Estudiante guardado con exito');
    }

    //FORMULARIO PARA EDITAR ESTUDIANTES
    public function modificar($id){
        $estudiante=Estudiante::findorfail($id);
        $jornada= Jornada::all();
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
