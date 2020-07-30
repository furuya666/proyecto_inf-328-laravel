<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
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
       
        $datos['personas']=Persona::where('ci','like',"%$ci%")
        ->orderBy('id','asc')
        ->paginate(6);
       
        return view('personas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas.create');
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
        'nombre'=>'required|string|max:100',
        'apellido_paterno'=>'required|string|max:100',
        'apellido_materno'=>'required|string|max:100',
        'edad'=>'required|integer|max:100',
        'ci'=>'required|string|max:12'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosPersona=request()->all();
        $datosPersona=request()->except('_token');
        Persona::insert($datosPersona);
        //return response()->json($datosPersona);
        return redirect('personas')->with('Mensaje','Persona agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona= Persona::findOrFail($id);
        return view('personas.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellido_paterno'=>'required|string|max:100',
            'apellido_materno'=>'required|string|max:100',
            'edad'=>'required|integer|max:100',
            'ci'=>'required|string|max:12'
            ];
        $datosHabilitado=request()->except(['_token','_method']);
        Persona:: where('id','=',$id)->update($datosHabilitado);
       // $persona=Persona::findOrFail($id);
        //return view('personas.edit',compact('persona'));        
         return redirect('personas')->with('Mensaje','Persona modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        Persona::destroy($id);
        return redirect('personas')->with('Mensaje','Persona eliminado con exito');
    }
}
