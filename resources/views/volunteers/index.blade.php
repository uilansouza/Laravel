@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')
<h1>Voluntario</h1>

<a href="{{ route('volunteer.create') }}">Criar novo voluntario</a>

<table class='table table-hover'>
    <thead >
         <tr><th>Nome</th><th>Email</th><th>Ação</th></tr>
    </thead>

    <tbody>
        @foreach($volunteers as $volunteer)
        <tr>
            <td><a href="{{ route('volunteer.show',$volunteer->id) }}">{{$volunteer->name}}</a></td>
            <td>{{$volunteer->email}}</td>
            <td><a href="volunteer/{{$volunteer->id}}/edit">Editar</a> - <a href="volunteer/{{$volunteer->id}}" data-method="DELETE">Excluir</a>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $volunteers->render() !!} <!-- Cria o link de paginação| o !! é quando o retorno é em html -->

@endsection

