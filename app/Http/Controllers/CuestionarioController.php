<?php

namespace sisPersonal\Http\Controllers;

use sisPersonal\Cuestionario;
use Illuminate\Http\Request;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \sisPersonal\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function show(Cuestionario $cuestionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \sisPersonal\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuestionario $cuestionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \sisPersonal\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuestionario $cuestionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \sisPersonal\Cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuestionario $cuestionario)
    {
        //
    }
}
