<?php

namespace sisPersonal\Http\Controllers;

use Illuminate\Http\Request;
use sisPersonal\AreaCargo;
use Illuminate\Support\Facades\Redirect;
use sisPersonal\Http\Requests\AreaCargoFormRequest;
use DB;
use Response;
use Illuminate\Support\Collection;
class AreaCargoController extends Controller
{  /**
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
            $areas=DB::table('area_cargo as a_c')
            ->join('cargo as c','a_c.idcargo','=','c.idcargo')
            ->join('area as a','a_c.idarea','=','a.idarea')
            ->select('a_c.idareacargo','a.nombre_area','c.nombre_puesto as cargo')
            ->where('a.nombre_area','LIKE','%'.$query.'%')
            ->orderBy('a_c.idarea','asc')
            ->paginate(5);
            return view('areacargo.index',["area_cargo"=>$areas,"searchText"=>$query]);
        }
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargo=DB::table('cargo')->get();
        $area=DB::table('area')->get();
        return view("areacargo.create",["cargo"=>$cargo,"area"=>$area]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaCargoFormRequest $request)
    {        
        $cont=0;
        	$idcargo=$request->get('idcargo');
            $idarea=$request->get('idarea');
            while ($cont < count($idcargo)) {
            	$area=new AreaCargo();
            	$area->idarea=$idarea[$cont];
            	$area->idcargo=$idcargo[$cont];
            	
                $area->save();
                $cont=$cont+1;
            } 
        return Redirect::to('areacargo');    
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
    public function update (AreaCargoFormRequest $request, $id)
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