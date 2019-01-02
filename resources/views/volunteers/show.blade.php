@extends('layouts.master')

@section('title', 'Detalhes')

@section('container')

<h1>Dados dos Voluntarios </h1>
 <p><strong>Nome:</strong> {{$volunteer->name}}</p>
 <p><strong>Telefone:</strong> {{$volunteer->phone}}</p>
 <p><strong>Email:</strong> {{$volunteer->email}}</p>

 @unless($volunteer->causes->isEmpty())
	<p><b>Causas apoiadas:</b></p>
	<ul>
	@foreach($volunteer->causes as $cause)
		<li>{{$cause->cause}}</li>
	@endforeach
	</ul>
@endunless
   
   <a href="{{ route('volunteer.index') }}"><button type="button" class="btn btn-info">Voltar para a Lista</button></a>

@endsection

