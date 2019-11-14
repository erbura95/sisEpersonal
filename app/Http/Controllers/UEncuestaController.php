<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class UEncuestaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {   
 
        return view('/usuario/encuesta/index');        

    }
}
