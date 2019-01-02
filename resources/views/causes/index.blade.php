@extends('layouts.master')

@section('title', 'Causas')

@section('container')

<h1>Causas</h1>

<p><a href="{{ route('cause.create') }}">Criar Nova Causa</a></p>

<table class="table">
	<thead>
		<tr><th>Causa</th><th></th></tr>
	</thead>

<tbody>
@foreach($causes as $cause)

<tr>
	<td><a href="{{ route('cause.show', $cause->id) }}">{{$cause->cause}}</a></td>
	<td>
		<a href="{{ route('cause.edit', $cause->id) }}">Editar</a> - 
		<a href="{{ route('cause.destroy', $cause->id) }}" data-method="DELETE">Excluir</a>
	</td>
</tr>

@endforeach
</tbody>
</table>

{!! $causes->render() !!}

@endsection