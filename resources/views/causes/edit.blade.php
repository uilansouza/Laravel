@extends('layouts.master')

@section('title', 'Editar Causa')

@section('container')

<h2>Editar uma Causa</h2>

{!! Form::model($cause, ['route' => ['cause.update', $cause->id], 'method' => 'PUT']) !!}

    @include('causes.form')
    
{!! Form::close() !!}

<a href="{{ route('cause.index') }}">Voltar para a Lista</a>

@endsection