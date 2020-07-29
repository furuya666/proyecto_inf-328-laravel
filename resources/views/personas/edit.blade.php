@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/personas/' .$persona->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('personas.form',['Modo'=>'editar'])
</form>
</div>
@endsection