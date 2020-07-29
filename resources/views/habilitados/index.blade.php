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
    <a href="{{ url('personas')}}" class=" btn btn-primary">Atras</a>
    <a href="{{ url('bonos')}}" class=" btn btn-success">Verificar Cobro</a>
 
   <br/>
   <nav class="navbar navbar-light float-right">
  <form class="form-inline">
  <a href="{{ url('habilitados')}}" class=" btn btn-secondary my-2 my-sm-0">Volver Atras</a>
    <input  name="Buscador"class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<br/>
    <table class="table table-light table-hover">
        <center><h2>LISTA DE APORTES Y NO APORTES AFPS</h2></center>
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Ci</th>
                <th>Apto</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($habilitados as $habilitado)
            <tr>
                <td>{{$loop->iteration}} </td>
                <td>{{$habilitado->nombre}}</td>
                <td>{{$habilitado->apellido_paterno}}</td>
                <td>{{$habilitado->apellido_materno}}</td>
                <td>{{$habilitado->edad}}</td>
                <td>{{$habilitado->ci}}</td>
                <td>{{$habilitado->apto}}</td>
                <td>{{$habilitado->descripcion}}</td>
                

              
            </tr>
            @endforeach
        </tbody>
    </table>
   {{$habilitados->links()}}
    </div>
@endsection