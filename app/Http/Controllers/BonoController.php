<?php

namespace App\Http\Controllers;

use App\Bono;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BonoController extends Controller
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
        $datos['bonos']= DB::table('bonos')
        ->leftjoin('habilitados','habilitados.id','=','bonos.habilitado_id')
        ->leftjoin('personas','personas.id','=','habilitados.persona_id')
        ->where('ci','like',"%$ci%")
        ->orderBy('bonos.id', 'asc')
        ->paginate(6);
       
        return  view('bonos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bonos.create');
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
        $campos=[
            'fecha'=>'required|string|max:100',
            'hora'=>'required|string|max:100',
            'entidad_financiera'=>'required|string|max:100',
            'habilitado_id'=>'required|integer|max:10000'
           
            ];
            $Mensaje=["required"=>'El :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);
            $datosBono=request()->all();
            $datosBono=request()->except('_token');
            Bono::insert($datosBono);
            //return response()->json($datosPersona);
            return redirect('bonos')->with('Mensaje','Persona cobro su bono con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function show(Bono $bono)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function edit(Bono $bono)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bono $bono)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bono  $bono
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bono $bono)
    {
        //
    }
}
