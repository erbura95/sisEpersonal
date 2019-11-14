<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;

//use sisPersonal\Http\Request;
use sisPersonal\Empleado;
use Illuminate\Support\Facades\Redirect;
use sisPersonal\Http\Requests\EmpleadoFormRequest;
use DB;

class EmpleadoController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $empleados=DB::table('empleado')->where('emp_nombre','LIKE','%'.$query.'%')->orderBy('idempleado','asc')->paginate(5);
            return view('empleado.index',["empleados"=>$empleados,"searchText"=>$query]);
        }
    }
    public function create(){
        return view("empleado.create");
    }
    public function store(EmpleadoFormRequest $request){
        $empleado=new Empleado;
        $empleado->idempleado=$request->get('idempleado');
        $empleado->emp_nombre=$request->get('emp_nombre');
        $empleado->emp_appaterno=$request->get('emp_appaterno');
        $empleado->emp_apmaterno=$request->get('emp_apmaterno');
        $empleado->emp_civil=$request->get('emp_civil');
        $empleado->emp_telefono=$request->get('emp_telefono');
        $empleado->emp_nacimiento=$request->get('emp_nacimiento');
        $empleado->emp_sexo=$request->get('emp_sexo');
        $empleado->emp_direccion=$request->get('emp_direccion');
        $empleado->emp_foto=$request->get('emp_foto');
        $empleado->emp_estado=$request->get('emp_estado');
        //para almacenar en la BD
        $empleado->save();
        return Redirect::to('empleado');
    }
    public function edit($idempleado){

        return view("empleado.edit",["empleado"=>Empleado::findOrFail($idempleado)]);
    }
    public function update(EmpleadoFormRequest $request, $idempleado){
//        $request->file('emp_foto')->storage('public');
        
        $empleado=Empleado::findOrFail($idempleado);
        $empleado->idempleado=$request->get('idempleado');
        $empleado->emp_nombre=$request->get('emp_nombre');
        $empleado->emp_appaterno=$request->get('emp_appaterno');
        $empleado->emp_apmaterno=$request->get('emp_apmaterno');
        $empleado->emp_civil=$request->get('emp_civil');
        $empleado->emp_telefono=$request->get('emp_telefono');
        $empleado->emp_nacimiento=$request->get('emp_nacimiento');
        $empleado->emp_sexo=$request->get('emp_sexo');
        $empleado->emp_direccion=$request->get('emp_direccion');
        $empleado->emp_foto=$request->get('emp_foto');
        $empleado->emp_estado=$request->get('emp_estado');
        $empleado->update();
        return Redirect::to('empleado');
    }
    public function destroy($idempleado){
        $empleado=Empleado::findOrFail($idempleado);
        $empleado->emp_estado='Inactivo';
        $empleado->update();
        return Redirect::to('empleado');
        
    }
}
