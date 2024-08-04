@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/media-query.css">
<link rel="stylesheet" href="../../css/planos.css">
<script src="../js/planos.js"></script>
@endsection

@section('title', 'Planos')

@section('header')
<a href="{{ route('pages-index') }}" class="link-header">Início</a>
<a href="{{ route('pages-contato') }}" class="link-header">Contato</a>
<a href="{{ route('pages-sobre') }}" class="link-header">Quem Somos?</a>
<a href="" class="link-header">Login</a>
<a href="" class="link-header">Registre-se</a>
@endsection

@section('main')
<div class="w-100 p-3">
    <h1 class="title-1">Escolha seu <span class="title-2">plano dentário</span></h1>
</div>

<!-- Planos -->

<section class="ex-planos">
    @if(count($planos) > 0)
        @foreach($planos as $plano)
            <div class="box-planos">
                <div class="c-box-planos">
                    <img src="{{ $plano->foto }}" alt="" class="img-plano">
                    <h3 class="text-center">{{ $plano->plano }}</h3>
                    <span class="desc-planos">
                        {{ $plano->descricao }}
                    </span>
                    <button class="btn btn-back btn-primary">R${{ $plano->precoFormatado }}/{{ $plano->assinatura }}</button>
                    <span class="line-box"></span>
                    <a href="" class="text-decoration-none">
                        <button class="btn btn-back btn-success">Entrar em Contato</button>
                    </a>
                </div>
            </div>
        @endforeach
    @else 
        <div class="msg-not-found">
            <div class="c-msg-not-found">
                <h3 class="text-primary">Sem planos disponíveis</h3>
            </div>
        </div>
    @endif
</section>

<!-- Plano Personalizado -->

<span class="line"></span>
<div class="w-100 p-3">
    <h1 class="title-1">ou crie seu <span class="title-2">plano dentário</span></h1>
</div>
<section class="ex-planos">
    <div class="box-personalizar-plano">
        <h3>Criando seu plano</h3>
        <p>Você pode criar seu própio plano dentário clicando no botão abaixo, você será redirencionado
            ao WhatsApp da clínica, lá você pode criar seu plano junto a atendente.
        </p>
        <a href="" class="text-decoration-none">
            <button class="btn btn-primary btn-back">Criar Agora</button>
        </a>
    </div>
</section>

<!-- Perguntas feitas com frequência -->

<span class="line"></span>
<div class="w-100 p-3">
    <h1 class="title-1">Perguntas feitas <span class="title-2">com frequência</span></h1>
</div>
<section class="ex-planos">
    @if(count($perguntas) > 0)
        @foreach($perguntas as $pergunta)
            <div class="box-perguntas">
                <h1 class="box-title-perguntas">{{ $pergunta->title }}</h1>
                <span class="line-box"></span>
                <p class="box-resposta-pergunta">{{ $pergunta->resposta }}</p>
            </div>
        @endforeach
    @else 
        <div class="msg-not-found">
            <div class="c-msg-not-found">
                <h3 class="text-primary">Não há perguntas frequentes</h3>
            </div>
        </div>
    @endif
</section>
@endsection