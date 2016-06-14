<!--extende template-->
@extends('template')

<!--Inicio de sessao -->
@section('title')
	Meio Ambiente 
@stop

@section('content')
	@foreach($arMeioAmbiente as $meioAmbiente)
	<hr>
	<div >
	<h3 >{{$meioAmbiente['post']['titulo']}}</h3></div>	
	<p>{{$meioAmbiente['post']['texto']}}</p>	
    
	@endforeach
		

@stop