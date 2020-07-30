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
        ->orderBy('habilitados.id', 'asc')
        ->paginate(6);
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
        $datosHabilitado=request()->all();
        $datosHabilitado=request()->except('_token');
        Habilitado::insert($datosHabilitado);
        //return response()->json($datosPersona);
        return redirect('habilitados')->with('Mensaje','AFPS agregado con exito');
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
    public function edit($id)
    {
        //
        $habilitado= Habilitado::findOrFail($id);
        return view('habilitados.edit',compact('habilitado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Habilitado  $habilitado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosHabilitado=request()->except(['_token','_method']);
        Habilitado:: where('id','=',$id)->update($datosHabilitado);
            
         return redirect('habilitados')->with('Mensaje','Habilitado modificado con exito');
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
