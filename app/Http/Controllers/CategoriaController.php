<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;
use sisPersonal\Pregunta;
use sisPersonal\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        //
        if($request){
            $query=trim($request->get('searchText'));
            $categoria=DB::table('categoria')
                ->where('cat_nombre','LIKE','%'.$query.'%')
                ->orderBy('idcategoria','asc')
                ->paginate(5);
            return view('cuestionario/categoria.index',["categoria"=>$categoria,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Categoria::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \sisPersonal\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \sisPersonal\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \sisPersonal\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
        $categoria = Categoria::findOrFail($request->idcategoria);
        $categoria->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \sisPersonal\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $idcategoria)
    {
        //
        $categoria = Categoria::findOrFail($request->idcategoria);
        $categoria->delete();

        return back();
    }
}
