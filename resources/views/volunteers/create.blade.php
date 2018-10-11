@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')

{!! Form::open(['route' => 'volunteer.store']) !!}

    @include('volunteers.form')
    
{!! Form::close() !!}

 <a href="{{ route('volunteer.index') }}">Voltar para a Lista</a>
@endsection