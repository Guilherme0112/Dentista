@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media-query.css">
    <link rel="stylesheet" href="../css/perfil.css">
@endsection

@section('title', 'Seu Perfil')

@section('header')
    <a href="{{ route('pages-planos') }}" class="link-header">Planos</a>
    <a href="" class="link-header">Marcar Consulta</a>
    <a href="" class="link-header">Preferências</a>
    <a href="" class="link-header">Sair</a>
@endsection

@section('main')
    <section class="ex-planos">
        <div class="box-perfil">
            <div class="box-perfil-1">  
                <h3>Suas Consultas</h3>
                <p>Não existe consultas marcadas</p>
                <a href="" class="btn btn-primary btn-back">Marcar Consulta</a>
            </div>
        </div>
    </section>
@endsection