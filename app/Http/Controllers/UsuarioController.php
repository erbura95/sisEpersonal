<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;
use sisPersonal\User;
use Illuminate\Support\Facades\Redirect;
use sisPersonal\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            //$usuario=DB::table('users')->where('name','LIKE','%'.$query.'%')->orderBy('id','asc')->paginate(5);
            //return view('usuario.index',["usuario"=>$usuario,"searchText"=>$query]);
            $usuario=DB::table('users as u')
            
            ->join('empleado as e','e.idempleado','=','u.emp_id')
            ->select('u.id','u.emp_id','e.emp_nombre','e.emp_appaterno','e.emp_apmaterno','u.name','u.email','u.tipo')
            ->where('u.emp_id','LIKE','%'.$query.'%')
            ->orderBy('u.emp_id','asc')
            ->paginate(5);
            return view('usuario.index',["usuario"=>$usuario,"searchText"=>$query]);

        }
    }
    public function create()
    {
    	$empleado=DB::table('empleado')->get();
        return view("usuario.create",["empleado"=>$empleado]);
    }
    public function store(CargoFormRequest $request)
    {
        $usuario=new User;
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->emp_id=$request->get('emp_id');
        $usuario->tipo=$request->get('tipo');

               
        //para almacenar en la BD
        $usuario->save();
        return Redirect::to('usuario');
    }

    public function edit($id)
    {
       return view("usuario.edit",["ususario"=>User::findOrFail($id)]);
    }
    public function update (UusuarioFormRequest $request, $id)
    {
        $usuario=User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->emp_id=$request->get('emp_id');
        $usuario->tipo=$request->get('tipo');
        $usuario->update();
        return Redirect::to('usuario');
    }
    public function destroy($id)
    {
        $usuario=DB::table('user')->where('id','=',$id)->delete();
        return Redirect::to('usuarioa');
    }

}
