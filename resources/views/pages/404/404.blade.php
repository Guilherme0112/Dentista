@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="../css/style.css">
@endsection

@section('title', 'Página não encontrada')

@section('header')
<a href="{{ route('pages-index') }}" class="link-header">Início</a>
<a href="" class="link-header">Contato</a>
<a href="{{ route('pages-sobre') }}" class="link-header">Quem Somos?</a>
<a href="" class="link-header">Login</a>
<a href="" class="link-header">Registre-se</a>
@endsection

@section('main')
    <h1 class="text-center text-light my-5">Página não encontrada!</h1> 
    <a href="{{ route('pages-index') }}" class="text-center text-light">
        <h5 class="my-5">Voltar para o Início</h5>
    </a>
@endsection