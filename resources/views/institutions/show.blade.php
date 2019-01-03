@extends('layouts.master')

@section('title', 'Detalhes da Instituição')

@section('container')

<h2>Detalhes da Instituição</h2>

<p><b>Nome:</b> {{$institution->name}}</p>
<p><b>Endereço:</b> {{$institution->address}}</p>
<p><b>Cidade:</b> {{$institution->city}}</p>

@unless($institution->volunteers->isEmpty())
	<p><b>Voluntários associados:</b></p>
	<ul>
	@foreach($institution->volunteers as $volunteer)
		<li>{{$volunteer->name}}</li>
	@endforeach
	</ul>
@endunless

<a href="{{ route('institution.index') }}"><button type="button" class="btn btn-info">Voltar para a Lista</button></a>

@endsection