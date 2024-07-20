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
<section class="filtro">
    <button class="btn btn-back btn-success">Plano Personalizado</button>
</section>
<span class="line"></span>
<section class="ex-planos">
    <div class="box-planos">
        <div class="c-box-planos">
            <img src="../../assets/img_1.png" alt="" class="img-planos">
            <span class="desc-planos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rerum, laborum assumenda, ad quod ipsum ullam modi amet reiciendis, autem ab id beatae necessitatibus earum quo! Incidunt quam non dolor! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel nostrum quis minima eius quia architecto, sequi assumenda iure ipsa velit, quae consectetur alias eos consequuntur itaque a neque ipsam delectus!</span>
            <button class="btn btn-back btn-primary">R$99,99/Mês</button>
        </div>
    </div>
</section>
@endsection
