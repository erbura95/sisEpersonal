<?php

namespace sisPersonal\Http\Controllers;


use Illuminate\Http\Request;
use sisPersonal\Cargo;
use Illuminate\Support\Facades\Redirect;
use sisPersonal\Http\Requests\CargoFormRequest;
use DB;

class CargoController extends Controller
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
        if($request){
            $query=trim($request->get('searchText'));
            $cargos=DB::table('cargo')->where('nombre_puesto','LIKE','%'.$query.'%')->orderBy('idcargo','asc')->paginate(5);
            return view('cargo.index',["cargo"=>$cargos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cargo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoFormRequest $request)
    {
        $cargo=new Cargo;
        $cargo->nombre_puesto=$request->get('nombre_puesto');
        $cargo->sueldo=$request->get('sueldo');
        
        //para almacenar en la BD
        $cargo->save();
        return Redirect::to('cargo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \sisPersonal\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**return view("cargo.show",["cargo"=>Cargo::findOrFail($id)]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \sisPersonal\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("cargo.edit",["cargo"=>Cargo::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \sisPersonal\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(CargoFormRequest $request, $id)
    {
        $cargo=Cargo::findOrFail($id);
        $cargo->nombre_puesto=$request->get('nombre_puesto');
        $cargo->sueldo=$request->get('sueldo');
        $cargo->update();
        return Redirect::to('cargo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \sisPersonal\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo=Cargo::findOrFail($id);
        $cargo->update();
        return Redirect::to('cargo');
    }
}
