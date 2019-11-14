<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Auth;

class WelcomeController extends Controller
{
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
        $empl=DB::table('empleado as e')
        ->join('users as u','u.emp_id','=','e.idempleado')
        ->where('e.idempleado','=','$id');
        return view('home',["empleados"=>$empl]); */
        $id = Auth::user()->tipo;
        if ($id=="ADMIN") {
        	return view('/home');
        }else{
        	return view('/welcome');
        }
        

    }
}
