@extends('layouts.app')
@section('content')
<div class="container">
    @if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
    {{
        Session::get('Mensaje')
    }}
    </div>
    @endif
    <a href="{{ url('personas/create')}}" class=" btn btn-success">Agregar Persona</a>
    <a href="{{ url('habilitados')}}" class=" btn btn-primary">Aportes AFPS</a>
</br>

<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <a href="{{ url('personas')}}" class=" btn btn-secondary my-2 my-sm-0">Volver Atras</a>
    <input  name="Buscador"class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
    
    <br/>
    <table class="table table-light table-hover">
        <center><h2>LISTA DE PERSONAS REGISTRADAS</h2></center>
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Ci</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
            <tr>
                <td>{{$loop->iteration}} </td>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->apellido_paterno}}</td>
                <td>{{$persona->apellido_materno}}</td>
                <td>{{$persona->edad}}</td>
                <td>{{$persona->ci}}</td>
                <td>
                    <a href="{{ url('/personas/'.$persona->id.'/edit')}}" class="btn btn-warning">Editar</a> 
                 
                
                <form method="post" action="{{ url('/personas/'.$persona->id)}}" style="display:inline">
                {{csrf_field()}}
                {{method_field('DELETE')}}
              <!--  <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>-->
                  </form>  
                
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$personas->links()}}
    </div>
@endsection