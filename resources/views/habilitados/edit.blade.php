@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/habilitados/' .$habilitado->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('habilitados.form',['Modo'=>'editar'])
</form>
</div>
@endsection