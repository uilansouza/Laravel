@extends('layouts.master')

@section('title', 'Detalhes')

@section('container')

<h1>Dados dos Voluntarios </h1>
 <p><strong>Nome:</strong> {{$volunteer->name}}</p>
 <p><strong>Telefone:</strong> {{$volunteer->phone}}</p>
 <p><strong>Email:</strong> {{$volunteer->email}}</p>
   
   <a href="{{ route('volunteer.index') }}"><button type="button" class="btn btn-info">Voltar para a Lista</button></a>

@endsection

