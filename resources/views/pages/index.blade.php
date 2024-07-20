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
    <div class="box-planos">
        <div class="c-box-planos">
            <img src="../assets/img_1.png" alt="" class="img-planos">
            <span class="desc-planos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rerum, laborum assumenda, ad quod ipsum ullam modi amet reiciendis, autem ab id beatae necessitatibus earum quo! Incidunt quam non dolor! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel nostrum quis minima eius quia architecto, sequi assumenda iure ipsa velit, quae consectetur alias eos consequuntur itaque a neque ipsam delectus!</span>
            <button class="btn btn-back btn-primary">R$99,99/Mês</button>
        </div>
    </div>
</section>
<span class="line"></span>
<div>
    <h1 class="title-1">Marque sua <span class="title-2">consulta conosco</span></h1>
</div>
<section>
</section>
@endsection