<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;
use sisPersonal\Pregunta;
use sisPersonal\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;

class PreguntaController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        //
        if($request){
            $query=trim($request->get('searchText'));
            $preguntas=DB::table('pregunta as pr')
                ->join('categoria as cat','pr.cat_id','=','cat.idcategoria')
                ->select('pr.idpregunta','pr.pr_pregunta','cat.idcategoria','cat.cat_nombre','cat.cat_tipo')
                ->where('pr_pregunta','LIKE','%'.$query.'%')
                ->orderBy('pr.idpregunta','asc')
                ->paginate(5);

            $categoria=DB::table('categoria')->get();
            return view('cuestionario/pregunta.index',["categoria"=>$categoria,"searchText"=>$query],compact('preguntas'));
        }
    }
    public function create(){
        $categoria=DB::table('categoria')->get();
        return view("cuestionario.pregunta.create",compact('categoria'));
    }
    public function store(Request $request)
    {
        //
        $preguntas=new Pregunta;
        $preguntas->pr_pregunta=$request->get('pr_pregunta');
        $preguntas->cat_id=$request->get('cat_id');
        //para almacenar en la BD
        $preguntas->save();
        return Redirect::to('cuestionario/pregunta');
    }
    public function show(Pregunta $pregunta)
    {
        //
    }

    public function edit(Pregunta $pregunta)
    {
        //
    }


    public function update(Request $request, Pregunta $pregunta)
    {
        //
    }

    public function destroy(Pregunta $pregunta)
    {
        //
    }
}
