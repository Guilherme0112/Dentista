@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/media-query.css">
@endsection

@section('title', 'Início')

@section('header')
<a href="" class="link-header">Planos</a>
<a href="" class="link-header">Contato</a>
<a href="{{ route('pages-sobre') }}" class="link-header">Quem Somos?</a>
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
            <button class="btn btn-primary btn-back">Fazer meu plano</button>
        </div>
    </div>
@endsection
@section('footer')

@endsection