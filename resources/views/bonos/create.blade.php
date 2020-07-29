@extends('layouts.app')
@section('content')
<div class="container">
    @if( count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
         <form action="{{url('bonos')}}" class="form-horizontal" method="post" enctype="multipart/form-data" autocomplete="off">
{{csrf_field()}}
@include('bonos.form',['Modo'=>'crear'])

    </form>
    </div>
@endsection