

@extends('layouts.app')

@section('title', 'Page Title')

@section('topo')
    @parent
@endsection

@section('content')
    <h2 >Curso Laravel </h2>
    <h1 >Boa tarde, {{$nome}} </h1>
@endsection

@section('rodape')
    @parent
@endsection