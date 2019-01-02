@extends('layouts.master')

@section('title', 'Editar Instituição')

@section('container')

<h2>Editar um Instituição</h2>

{!! Form::model($institution, ['route' => ['institution.update', $institution->id], 'method' => 'PUT']) !!}

    @include('institutions.form')
    
{!! Form::close() !!}

<a href="{{ route('institution.index') }}">Voltar para a Lista</a>

@endsection