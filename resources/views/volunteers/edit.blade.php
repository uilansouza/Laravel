@extends('layouts.master')

@section('title', 'Form Edit')

@section('container')

{!! Form::model($volunteer,['route' => ['volunteer.update',$volunteer->id],'method'=>'PUT']) !!}
 <!-- o $volunter é colocado para trazer o formulario ja preenchido -->
 <!-- o form::model é o metodo para edição também-->
 
    @include('volunteers.form')
    
{!! Form::close() !!}

   <a href="{{ route('volunteer.index') }}">Voltar para a Lista</a>
@endsection