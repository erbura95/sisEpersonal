<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        /*$id = Auth::user()->emp_id ;
        $usuario=DB::table('usuario as u')
        ->join('empleado as e','e.idempleado','=','u.emp_id')
        ->select('u.id','u.emp_id','e.emp_nombre','e.emp_appaterno','e.emp_apmaterno','u.name','u.email','u.tipo')
        ->where('e.idempleado','=','$id');
        return view('home',["usuario"=>$usuario]); */
        
        return view('home');
    }
}
