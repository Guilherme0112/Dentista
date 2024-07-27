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
<section class="perfil">
    <img src="" alt="" class="img-perfil">
    <h1>Nome do Perfil</h1>
</section>
<span class="line"></span>
<h1 class="title-1">Veja suas <span class="title-2">consultas</span></h1>
    <section class="ex-planos">
        <div class="box-perfil">
            <div class="box-perfil-1">  
                <h3>Suas Consultas</h3>
                <p>Não existe consultas marcadas</p>
                <a href="" class="btn btn-primary btn-back">Marcar Consulta</a>
            </div>
        </div>
        <div class="box-perfil">
            <div class="box-perfil-1">  
                <h3>Histórico de Consultas</h3>
                <p>Não existe histórico de consultas</p>
                <a href="" class="btn btn-primary btn-back">Ver histórico</a>
            </div>
        </div>
    </section>
    <span class="line"></span>
    <h1 class="title-1">Seu <span class="title-2">Plano</span></h1>
    <section class="ex-planos">
        <div class="box-perfil">
            <div class="box-perfil-1">  
                <h3>Vencimento</h3>
                <p>Seu plano vence no dia dd/mm/YYYY</p>
                <a href="" class="btn btn-primary btn-back">Renovar</a>
            </div>
        </div>
        <div class="box-perfil">
            <div class="box-perfil-1">  
                <h3>Plano</h3>
                <p>Você está usando o plano XXXX</p>
                <a href="{{ route('pages-planos') }}" class="btn btn-primary btn-back">Ver Mais</a>
            </div>
        </div>
        <div class="box-perfil">
            <div class="box-perfil-1">  
                <h3>Cancelar Plano</h3>
                <p>Cancele seu plano odontológico</p>
                <a href="" class="btn btn-primary btn-back">Cancelar</a>
            </div>
        </div>
    </section>
    <span class="line"></span>
    <h1 class="title-1">Recados do <span class="title-2">seu dentista</span></h1>
    <section class="ex-planos">
        <div class="recados">
            <div class="c-recados">
                <h1>Recados do seu dentista</h1>
                <p>Sem recados por agora</p>
                <span class="line bg-primary"></span>
                <a href="" class="btn btn-primary btn-back">Ver todos os recados</a>
            </div>
        </div>
    </section>
@endsection