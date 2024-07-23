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
<a href="" class="link-header">Contato</a>
<a href="{{ route('pages-sobre') }}" class="link-header">Quem Somos?</a>
<a href="" class="link-header">Login</a>
<a href="" class="link-header">Registre-se</a>
@endsection

@section('main')
<div class="w-100 p-3">
    <h1 class="title-1">Escolha seu <span class="title-2">plano dentário</span></h1>
</div>
<section class="ex-planos">
    @foreach($planos as $plano)
    <div class="box-planos">
        <div class="c-box-planos">
            <img src="" alt="" class="img-plano">
            <h3 class="text-center">{{ $plano->plano }}</h3>
            <span class="desc-planos">
                {{ $plano->descricao }}
            </span>
            <button class="btn btn-back btn-primary">R${{ $plano->precoFormatado }}/{{ $plano->assinatura }}</button>
            <span class="line-box"></span>
            <a href="">
                <button class="btn btn-back btn-success">Entrar em Contato</button>
            </a>
        </div>
    </div>
    @endforeach
</section>
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
        <a href="">
            <button class="btn btn-primary btn-back">Criar Agora</button>
        </a>
    </div>
</section>
<span class="line"></span>
<div class="w-100 p-3">
    <h1 class="title-1">Perguntas feitas <span class="title-2">com frequência</span></h1>
</div>
<section>

</section>
@endsection