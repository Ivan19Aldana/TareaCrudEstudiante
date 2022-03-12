<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jornada;
class JornadaController extends Controller
{
    //LISTADO DE LOS GRADOS DISPONIBLES
    public function listado(){
        $data['jornada']=Jornada::paginate(75);
        return view('jornada.jornadalista',$data);
    }

    //FORMULARIO PARA CREAR NUEVO GRADO
    public function gradoform(){
        return view('jornada.Jornadaform');
    }

    //GUARDAR NUEVO GRADO
    public function save(Request $request){
        $validator=$this->validate($request,[
            'idjornada'=>'required',
            'descripcion'=>'required',

        ]);
        $userdata = request()->except('_token');
        Jornada::insert($userdata);
        return back() ->with('jornadaguardado', 'Jornada guardado con exito');
    }

    //ELIMINAR GRADO
    public function delete($idjornada){
        Jornada::destroy($idjornada);
        return back() ->with('jornadaeliminado', 'Jornada eliminado con exito');
    }

}
