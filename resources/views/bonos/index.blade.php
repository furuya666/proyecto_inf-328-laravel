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
    <a href="{{ url('habilitados')}}" class=" btn btn-primary">Atras</a>
    <a href="{{ url('bonos/create')}}" class=" btn btn-secondary">Cobrar Bono</a>
 
   <br/>
   <nav class="navbar navbar-light float-right">
  <form class="form-inline">
  <a href="{{ url('bonos')}}" class=" btn btn-secondary my-2 my-sm-0">Volver Atras</a>
    <input  name="Buscador"class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
    <br/>
    <table class="table table-light table-hover">
        <center><h2>LISTA DE COBRANTES</h2></center>
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Ci</th>
                <th>Entidad Financiera</th>
                <th>Apto</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bonos as $bono)
            <tr>
                <td>{{$loop->iteration}} </td>
                <td>{{$bono->nombre}}</td>
                <td>{{$bono->apellido_paterno}}</td>
                <td>{{$bono->apellido_materno}}</td>
                <td>{{$bono->ci}}</td>
                <td>{{$bono->entidad_financiera}}</td>
                <td>{{$bono->apto}}</td>
                <td>{{$bono->descripcion}}</td>
                

              
            </tr>
            @endforeach
        </tbody>
    </table>
  {{$bonos->links()}}
    </div>
@endsection