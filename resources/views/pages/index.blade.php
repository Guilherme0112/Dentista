@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/media-query.css">
<script src="../js/script.js"></script>
@endsection

@section('title', 'Início')

@section('header')
<a href="{{ route('pages-planos') }}" class="link-header">Planos</a>
<a href="" class="link-header">Contato</a>
<a href="{{ route('pages-sobre') }}" class="link-header">Quem Somos?</a>
<a href="" class="link-header">Login</a>
<a href="" class="link-header">Registre-se</a>
@endsection
@section('main')
<div class="background">
    <div class="text">
        <h2 class="title-text">Por que ir ao Dentista?</h2>
        <p class="text-text">
            Manter a saúde bucal em dia é fundamental para o bem-estar geral do nosso corpo. Uma das maneiras mais eficazes de garantir isso é através de visitas regulares ao dentista. O dentista não só cuida da saúde dos nossos dentes, mas também da saúde da nossa gengiva e da nossa boca como um todo.

            Ir ao dentista regularmente ajuda a prevenir problemas bucais, como cáries, gengivite e doenças periodontais. Além disso, o dentista pode identificar precocemente qualquer problema e tratá-lo antes que se agrave, o que pode resultar em tratamentos mais simples e menos invasivos.
        </p>
    </div>
    <div class="div-btn">
        <a href="{{ route('pages-planos') }}"class="btn btn-primary btn-back">Fazer meu plano</a>
    </div>
</div>
<div>
    <h1 class="title-1">Veja sobre <span class="title-2">nossos planos</span></h1>
</div>
<section class="ex-planos">
    @foreach($planos as $plano)
        <div class="box-planos">
            <div class="c-box-planos">
                <span class="desc-planos">
                    <h3 class="text-center">{{ $plano->plano }}</h3>
                    {{ $plano->descricao }}      
                </span>
                <button class="btn btn-back btn-primary">R${{ $plano->precoformatado }}/{{ $plano->assinatura }}</button>
            </div>
        </div>
    @endforeach
</section>
<span class="line"></span>
<div>
    <h1 class="title-1">Marque sua <span class="title-2">consulta conosco</span></h1>
</div>
<section class="ex-planos">
    <div class="calendar">
        <div class="c-box-calendar">
            <h2>Vaga mais próxima</h2>
            <span></span>
        </div>
    </div>
</section>
<span class="line"></span>
<h1 class="title-1">Conheça <span class="title-2">nossos tratamentos</span></h1>
<section class="ex-planos">
    @foreach($tratamentos as $tratamento)
        <div class="tratamentos">
            <div class="c-tratamentos">
                <img src="{{ $tratamento->photo }}" class="img-tratamentos">
                <h4 class="text-center">{{ $tratamento->title }}</h4>
                <p class="text-tratamentos">
                    {{ $tratamento->descricao }}
                </p>
                <button class="btn btn-back btn-primary">Saiba Mais</button>
            </div>
        </div>
        @endforeach
</section>
@endsection