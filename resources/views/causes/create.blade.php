@extends('layouts.master')

@section('title', 'Criar nova Causa')

@section('container')

<h2>Criar nova Causa</h2>

{!! Form::open(['route' => 'cause.store']) !!}

    @include('causes.form')
    
{!! Form::close() !!}

<a href="{{ route('cause.index') }}">Voltar para a Lista</a>

@endsection