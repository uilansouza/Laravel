@extends('layouts.master')

@section('title','Pagina Inicial')

@section('container')

<h1>O Email foi enviado</h1>
<p><a href="<?= route('contato') ?>">Clique Para voltar</a></p>

@endsection