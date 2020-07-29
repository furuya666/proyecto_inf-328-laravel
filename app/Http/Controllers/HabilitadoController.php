<?php

namespace App\Http\Controllers;

use App\Habilitado;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
class HabilitadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $ci=$request->get('Buscador');
        $datos['habilitados']= DB::table('habilitados')
        ->join('personas','habilitados.persona_id','personas.id')
        ->where('ci','like',"%$ci%")
        ->orderBy('nombre', 'asc')
        ->paginate(3);
        return  view('habilitados.index',$datos);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('habilitados.create');
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
     * @param  \App\Habilitado  $habilitado
     * @return \Illuminate\Http\Response
     */
    public function show(Habilitado $habilitado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Habilitado  $habilitado
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilitado $habilitado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Habilitado  $habilitado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habilitado $habilitado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Habilitado  $habilitado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilitado $habilitado)
    {
        //
    }
}
