<?php

namespace sisPersonal\Http\Controllers;

use sisPersonal\Area;
use sisPersonal\AreaCargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use sisPersonal\Http\Requests\AreaFormRequest;
use DB;
use Response;
use Illuminate\Support\Collection;

class AreaController extends Controller
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
           /* $areas=DB::table('area_cargo as a_c')
            ->join('cargo as c','a_c.idcargo','=','c.idcargo')
            ->join('area as a','a_c.idarea','=','a.idarea')
            ->select('a_c.idareacargo','a.nombre_area','c.nombre_puesto as cargo')
            ->where('a.nombre_area','LIKE','%'.$query.'%')
            ->orderBy('a_c.idarea','asc')
            ->paginate(5);
            return view('area.index',["area_cargo"=>$areas,"searchText"=>$query]);*/

            $areas=DB::table('area')->where('nombre_area','LIKE','%'.$query.'%')->orderBy('idarea','asc')->paginate(5);
            return view('area.index',["area"=>$areas,"searchText"=>$query]);
        
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area=DB::table('area')->get();
        return view("area.form",["area"=>$area]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaFormRequest $request)
    {
            $area=new Area;
            $area->nombre_area=$request->get('nombre_area');
            $area->save();          
          
        return Redirect::to('area');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \sisPersonal\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area=DB::table('area_cargo as a_c')
            ->join('cargo as c','a_c.idcargo','=','c.idcargo')
            ->join('area as a','a_c.idarea','=','a.idarea')
            ->select('a_c.idarea_cargo','a.nombre_area as nombre','c.nombre_puesto as cargo')
            ->where('a.idarea','=',$id);
        return view("area.show",["area"=>$area]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \sisPersonal\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \sisPersonal\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update (AreaFormRequest $request, $id)
    {
        $area=Area::findOrFail($id);
        $area->nombre_area=$request->get('nombre_area');
        $area->update();
        return Redirect::to('area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \sisPersonal\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area=Area::findOrFail($id);
        $area->update();
        return Redirect::to('area');
    }
}
